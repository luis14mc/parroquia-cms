<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Mail\SiteFormSubmissionReceivedMail;
use App\Models\SiteForm;
use App\Models\SiteFormSubmission;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

final class DynamicSiteFormTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMiddleware(VerifyCsrfToken::class);
    }

    public function test_show_returns_404_when_form_disabled(): void
    {
        $form = SiteForm::factory()->disabled()->create();

        $this->get(route('forms.show', ['slug' => $form->slug]))
            ->assertNotFound();
    }

    public function test_show_returns_ok_when_enabled(): void
    {
        $form = SiteForm::factory()->create();

        $this->get(route('forms.show', ['slug' => $form->slug]))
            ->assertOk();
    }

    public function test_store_creates_submission_and_redirects(): void
    {
        $form = SiteForm::factory()->create();

        $response = $this->post(route('forms.store', ['slug' => $form->slug]), [
            'nombre' => 'María Test',
            'email' => 'maria@example.test',
        ]);

        $response->assertRedirect(route('forms.thanks', ['slug' => $form->slug]));

        $this->assertDatabaseCount('site_form_submissions', 1);

        $submission = SiteFormSubmission::query()->firstOrFail();
        $this->assertSame($form->id, $submission->site_form_id);
        $this->assertSame('María Test', $submission->payload['nombre']);
        $this->assertSame('maria@example.test', $submission->payload['email']);
    }

    public function test_store_returns_403_when_disabled(): void
    {
        $form = SiteForm::factory()->disabled()->create();

        $this->post(route('forms.store', ['slug' => $form->slug]), [
            'nombre' => 'x',
            'email' => 'e@test.test',
        ])->assertForbidden();
    }

    public function test_store_sends_mail_when_notify_emails_configured(): void
    {
        Mail::fake();
        config(['cms.submission_notify_emails' => ['pastoral@test.example']]);

        $form = SiteForm::factory()->create();

        $this->post(route('forms.store', ['slug' => $form->slug]), [
            'nombre' => 'Mail User',
            'email' => 'mailuser@test.example',
        ])->assertRedirect(route('forms.thanks', ['slug' => $form->slug]));

        Mail::assertSent(SiteFormSubmissionReceivedMail::class);
    }

    public function test_store_does_not_mail_when_notify_list_empty(): void
    {
        Mail::fake();
        config(['cms.submission_notify_emails' => []]);

        $form = SiteForm::factory()->create();

        $this->post(route('forms.store', ['slug' => $form->slug]), [
            'nombre' => 'A',
            'email' => 'b@test.example',
        ])->assertRedirect();

        Mail::assertNothingSent();
    }
}
