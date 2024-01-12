<?php

namespace Kimchanhyung98\LaravelMaker\Commands;

class ActionCommand extends MakeCommand
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
}
