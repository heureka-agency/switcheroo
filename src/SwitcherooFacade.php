<?php

namespace HeurekaAgency\Switcheroo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HeurekaAgency\Switcheroo\Skeleton\SkeletonClass
 */
class SwitcherooFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'switcheroo';
    }
}
