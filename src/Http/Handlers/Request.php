<?php

namespace Laraman\Beyonic\Http\Handlers;

use Beyonic;

// Set API Versiona and API Key

Beyonic::setApiVersion(config('beyonic.beyonic_api_version'));
Beyonic::setApiKey(config('beyonic.beyonic_api_key'));

class Request
{

    public function __construct() {

        // Check if BEYONIC_CLIENT_VERSION is defined, else define it.

        if (!defined('BEYONIC_CLIENT_VERSION')) define("BEYONIC_CLIENT_VERSION", config('beyonic.beyonic_client_version'));

    }
    
}

//EOF
