<?php

namespace Laraman\Beyonic\Http\Traits;


use Beyonic_Collection_Request;
use Beyonic_Exception;

trait CollectionRequest
{

    protected function collectionRequestHandler( $requestType, $data = NULL, $id = NULL) {

        try {

            $response = '';

            switch ($requestType) {

                case 'create':
                    $response =  Beyonic_Collection_Request::create($data);
                    break;

                case 'get':
                    $response =  Beyonic_Collection_Request::get($data);
                    break;

                case 'getAll':
                    $response =  Beyonic_Collection_Request::getAll($data);
                    break;

                case 'update':
                    $response =  Beyonic_Collection_Request::update($id, $data);
                    break;

                case 'send':
                    $response =  Beyonic_Collection_Request::send();
                    break;

                case 'delete':
                    $response =  Beyonic_Collection_Request::delete($data);
                    break;

                default:
                    $response = response()->json(['message' => 'Select correct collection request type']);
                    break;
            }

            return $response;
    
        } catch (Beyonic_Exception $ex) {

            throw new \Exception($ex->responseBody, $ex->getCode());

        }
    }
    
}

//EOF
