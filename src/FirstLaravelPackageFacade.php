<?php

namespace Qt\FirstLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Qt\FirstLaravelPackage\FirstLaravelPackage
 */
class FirstLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'first-laravel-package';
    }
}
