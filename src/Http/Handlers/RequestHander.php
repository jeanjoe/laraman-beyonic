<?php

namespace Laraman\Beyonic\Http\Handlers;

use Beyonic as ManzedeBeyonic;
use Beyonic_Collection_Request;
use Beyonic_Collection;
use Beyonic_Payment;
use Beyonic_Contact;
use Beyonic_Exception;

// Set API Versiona and API Key

ManzedeBeyonic::setApiVersion(config('beyonic.beyonic_api_version'));
ManzedeBeyonic::setApiKey(config('beyonic.beyonic_api_key'));

class RequestHandler
{

    public function __construct() {

        // Check if BEYONIC_CLIENT_VERSION is defined, else define it.

        if (!defined('BEYONIC_CLIENT_VERSION')) define("BEYONIC_CLIENT_VERSION", config('beyonic.beyonic_client_version'));

    }

    protected function beyonicRequestHandler( $beyonicRequest, $requestType, $requestData = NULL) {

        try {

            if ($beyonicRequest == 'collection') {
                
                $response = '';

                switch ($requestType) {

                    case 'create':
                        $response =  Beyonic_Collection_Request::create($requestData);
                        break;

                    case 'get':
                        $response =  Beyonic_Collection_Request::get($requestData);
                        break;

                    case 'getAll':
                        $response =  Beyonic_Collection_Request::getAll($requestData);
                        break;

                    case 'update':
                        $response =  Beyonic_Collection_Request::update($requestData);
                        break;

                    case 'send':
                        $response =  Beyonic_Collection_Request::send();
                        break;

                    case 'delete':
                        $response =  Beyonic_Collection_Request::delete($requestData);
                        break;

                    default:
                        $response = response()->json([
                            'message' => 'Select correct request type'
                        ]);
                        break;
                }

                return $response;
            }
    
        } catch (Beyonic_Exception $ex) {

            throw new \Exception($ex->responseBody, $ex->getCode());

        }
    }
    
}

//EOF
