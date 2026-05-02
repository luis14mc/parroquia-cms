<?php

declare(strict_types=1);

namespace App\Filament\Resources\TallerSolidaridadRegistros\Pages;

use App\Filament\Resources\TallerSolidaridadRegistros\TallerSolidaridadRegistroResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ManageTallerSolidaridadRegistros extends ManageRecords
{
    protected static string $resource = TallerSolidaridadRegistroResource::class;

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
        $filename = 'taller-solidaridad-inscritos-'.now()->format('Y-m-d-His').'.csv';
        Storage::disk('local')->makeDirectory('temp');

        $relativePath = 'temp/'.$filename;
        $fullPath = Storage::disk('local')->path($relativePath);

        $handle = fopen($fullPath, 'wb');
        fwrite($handle, "\xEF\xBB\xBF");
        fputcsv($handle, ['id', 'nombre_completo', 'telefono', 'email', 'sector_parroquial', 'fecha_iso', 'site_form_submission_id']);

        foreach ($this->getTableQueryForExport()->cursor() as $registro) {
            fputcsv($handle, [
                $registro->id,
                $registro->nombre_completo,
                $registro->telefono,
                $registro->email,
                $registro->sector_parroquial,
                $registro->created_at?->format('c') ?? '',
                $registro->site_form_submission_id ?? '',
            ]);
        }

        fclose($handle);

        return response()->download($fullPath, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ])->deleteFileAfterSend(true);
    }
}
