<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\SiteFormSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

final class SiteFormSubmissionReceivedMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public SiteFormSubmission $submission) {}

    public function envelope(): Envelope
    {
        $this->submission->loadMissing('siteForm');

        $label = $this->submission->siteForm?->name ?? 'Formulario';

        return new Envelope(
            subject: 'Nueva inscripción: '.$label,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.site-form-submission-received',
        );
    }
}
