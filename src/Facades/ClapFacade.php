<?php
/**
 * Created by PhpStorm.
 * User: minako
 * Date: 2019/04/08
 * Time: 0:23
 */

namespace Binthec\TestPkg\Facades;

use Illuminate\Support\Facades\Facade;

class ClapFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'ClapServiceProvider';
    }
}