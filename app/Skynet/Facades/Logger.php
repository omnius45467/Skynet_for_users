<?php namespace App\Skynet\Facades;

use Illuminate\Support\Facades\Facade;


class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tracker';
    }

}