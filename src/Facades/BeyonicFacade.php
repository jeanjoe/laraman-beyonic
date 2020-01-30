<?php

namespace Laraman\Beyonic\Facades;

use Illuminate\Support\Facades\Facade;

class BeyonicFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'laraman-beyonic';
    }

}