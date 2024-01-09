<?php

namespace Kimchanhyung98\LaravelMaker\Commands;

use Illuminate\Console\GeneratorCommand;

class ActionCommand extends GeneratorCommand
{
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'make:action {name}';

    /**
     * The console command description.
     *
     * @var string|null
     */
    public $description = 'Make a new action class';

    /**
     * Get the stub file for the generator.
     */
    protected function getStub(): string
    {
        return __DIR__.'/../Stubs/action.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Actions';
    }
}
