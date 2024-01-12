<?php

namespace Kimchanhyung98\LaravelMaker\Commands;

class ServiceCommand extends MakeCommand
{
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string|null
     */
    public $description = 'Make a new service class';
}
