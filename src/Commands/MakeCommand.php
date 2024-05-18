<?php

namespace Kimchanhyung98\LaravelMaker\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class MakeCommand extends GeneratorCommand
{
    /**
     * Get the stub file for the generator.
     */
    protected function getStub(): string
    {
        return config('maker.'.Str::lower($this->type).'.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('maker.'.Str::lower($this->type).'.namespace');
    }
}
