<?php

namespace App\Menu;

use Illuminate\Support\Facades\Facade;

class MenuBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cnv.menu.factory';
    }
}
