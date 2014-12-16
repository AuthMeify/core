<?php

namespace AuthMeify;

use Illuminate\Support\Facades\Facade;

class Core extends Facade
{
    protected static function getFacadeAccessor()
    {
        return static::$app;
    }

    public static function isInstalled()
    {
        return static::$app->make('config')->hasGroup('authmeify');
    }

    public static function version()
    {
        return '1.0.0-alpha';
    }
}

