<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Usuario inicial del panel (/admin)
    |--------------------------------------------------------------------------
    |
    | Si defines CMS_ADMIN_EMAIL y CMS_ADMIN_PASSWORD, DatabaseSeeder creará o
    | actualizará ese usuario (hash bcrypt). En producción usa contraseña fuerte.
    |
    */

    'admin_email' => env('CMS_ADMIN_EMAIL'),

    'admin_password' => env('CMS_ADMIN_PASSWORD'),

    /*
    | Correos que reciben aviso al llegar una nueva inscripción (formulario público).
    | Lista separada por comas. Vacío = no se envía correo.
    */
    'submission_notify_emails' => array_values(array_filter(array_map(
        static fn (string $s): string => trim($s),
        explode(',', (string) env('CMS_SUBMISSION_NOTIFY_EMAILS', ''))
    ))),

];
