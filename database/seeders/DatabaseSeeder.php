<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $email = config('cms.admin_email');
        $plain = config('cms.admin_password');

        if (is_string($email) && $email !== '' && is_string($plain) && $plain !== '') {
            \App\Models\User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => 'Administrador CMS',
                    'password' => bcrypt($plain),
                    'is_admin' => true,
                ]
            );
        }

        $this->call(SiteFormSeeder::class);
    }
}
