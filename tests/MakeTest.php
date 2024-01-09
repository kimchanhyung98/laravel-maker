<?php

namespace Kimchanhyung98\LaravelMaker\Tests;

use Kimchanhyung98\LaravelMaker\MakerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class MakeTest extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            MakerServiceProvider::class,
        ];
    }

    public function test_artisan_make_action_command(): void
    {
        $this->artisan('make:action SampleAction')->assertSuccessful();
        $this->assertFileExists(app_path('Actions/SampleAction.php'));
    }

    public function test_artisan_make_service_command(): void
    {
        $this->artisan('make:service SampleService')->assertSuccessful();
        $this->assertFileExists(app_path('Services/SampleService.php'));
    }
}
