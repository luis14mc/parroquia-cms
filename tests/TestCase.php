<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Los tests de vistas usan layouts con @vite; no exigen `npm run build` ni manifest en CI/local.
        $this->withoutVite();
    }
}
