<?php

use function Pest\Laravel\artisan;

it('executed artisan make:action command', function () {
    artisan('make:action', ['name' => 'SampleAction'])->assertExitCode(0);
    expect(file_exists(app_path('Actions/SampleAction.php')))->toBeTrue();
});

it('executed artisan make:service command', function () {
    artisan('make:service', ['name' => 'SampleService'])->assertExitCode(0);
    expect(file_exists(app_path('Services/SampleService.php')))->toBeTrue();
});
