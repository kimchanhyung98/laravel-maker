<?php

namespace Kimchanhyung98\LaravelMaker\Tests;

use Kimchanhyung98\LaravelMaker\MakerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            MakerServiceProvider::class,
        ];
    }
}
