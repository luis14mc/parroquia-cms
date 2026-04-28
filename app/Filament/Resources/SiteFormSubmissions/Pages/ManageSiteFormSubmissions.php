<?php

declare(strict_types=1);

namespace App\Filament\Resources\SiteFormSubmissions\Pages;

use App\Filament\Resources\SiteFormSubmissions\SiteFormSubmissionResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ManageSiteFormSubmissions extends ManageRecords
{
    protected static string $resource = SiteFormSubmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportCsv')
                ->label('Exportar CSV')
                ->icon(Heroicon::OutlinedArrowDownTray)
                ->color('gray')
                ->action(fn (): BinaryFileResponse => $this->downloadCsvExport()),
        ];
    }

    protected function downloadCsvExport(): BinaryFileResponse
    {
        $filename = 'inscripciones-'.now()->format('Y-m-d-His').'.csv';
        Storage::disk('local')->makeDirectory('temp');

        $relativePath = 'temp/'.$filename;
        $fullPath = Storage::disk('local')->path($relativePath);

        $handle = fopen($fullPath, 'wb');
        fwrite($handle, "\xEF\xBB\xBF");
        fputcsv($handle, ['id', 'formulario_slug', 'formulario_nombre', 'fecha_iso', 'ip', 'payload_json']);

        $query = $this->getTableQueryForExport()->with('siteForm');

        foreach ($query->cursor() as $submission) {
            $form = $submission->siteForm;

            fputcsv($handle, [
                $submission->id,
                $form?->slug ?? '',
                $form?->name ?? '',
                $submission->created_at?->format('c') ?? '',
                $submission->ip_address ?? '',
                json_encode($submission->payload ?? [], JSON_UNESCAPED_UNICODE),
            ]);
        }

        fclose($handle);

        return response()->download($fullPath, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ])->deleteFileAfterSend(true);
    }
}
