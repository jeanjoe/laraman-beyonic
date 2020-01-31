<?php

namespace Laraman\Beyonic\Http\Traits;

use Beyonic_Payment;
use Beyonic_Exception;

trait Payment
{

    protected function paymentHandler( $requestType, $requestData = NULL) {

        try {
                
            $response = '';

            switch ($requestType) {

                case 'create':
                    $response =  Beyonic_Payment::create($requestData);
                    break;

                case 'get':
                    $response =  Beyonic_Payment::get($requestData);
                    break;

                case 'getAll':
                    $response =  Beyonic_Payment::getAll($requestData);
                    break;

                case 'update':
                    $response =  Beyonic_Payment::update($requestData);
                    break;

                case 'delete':
                    $response =  Beyonic_Payment::delete($requestData);
                    break;

                default:
                    $response = response()->json(['message' => 'Select correct payment type']);
                    break;
            }

            return $response;
    
        } catch (Beyonic_Exception $ex) {

            throw new \Exception($ex->responseBody, $ex->getCode());

        }
    }
    
}

//EOF
