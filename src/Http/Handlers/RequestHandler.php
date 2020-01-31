<?php

namespace Laraman\Beyonic\Http\Handlers;

use Laraman\Beyonic\Http\Traits\CollectionRequest;
use Laraman\Beyonic\Http\Traits\Collection;
use Laraman\Beyonic\Http\Traits\Payment;
use Laraman\Beyonic\Http\Handlers\Request;


class RequestHandler extends Request
{

    use CollectionRequest, Collection, Payment;
    
}

//EOF
