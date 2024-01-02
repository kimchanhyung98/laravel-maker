<?php

namespace Kimchanhyung98\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kimchanhyung98\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kimchanhyung98\Skeleton\Skeleton::class;
    }
}
