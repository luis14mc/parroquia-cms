<?php

declare(strict_types=1);

namespace App\Observers;

use App\Mail\SiteFormSubmissionReceivedMail;
use App\Models\SiteFormSubmission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

final class SiteFormSubmissionObserver
{
    public function created(SiteFormSubmission $submission): void
    {
        $recipients = config('cms.submission_notify_emails', []);

        if ($recipients === []) {
            return;
        }

        $submission->loadMissing('siteForm');

        try {
            Mail::to($recipients)->send(new SiteFormSubmissionReceivedMail($submission));
        } catch (\Throwable $e) {
            Log::warning('site-form-submission: correo de aviso no enviado', [
                'submission_id' => $submission->id,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
