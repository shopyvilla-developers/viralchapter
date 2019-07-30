<?php

namespace CloudCMS\Facades;

use Illuminate\Support\Facades\Facade;

class CloudCMS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \CloudCMS\CloudCMS::class;
    }
}
