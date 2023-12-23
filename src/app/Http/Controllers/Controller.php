<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $REDIS_KEY_PREFIX = 'lumen_database_';
}
