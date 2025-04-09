<?php

namespace Alqabali\FilamentImagePreview\Tests;

use Alqabali\FilamentImagePreview\FilamentImagePreviewServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app): array
    {
        return [
            FilamentImagePreviewServiceProvider::class,
        ];
    }
}
