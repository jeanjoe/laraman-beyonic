<?php

namespace Laraman\Beyonic\Http\Traits;


use Beyonic_Collection;
use Beyonic_Exception;

trait Collection
{

    protected function collectionHandler( $collectionType, $data = NULL) {

        try {
                
            $response = '';

            switch ($collectionType) {

                case 'get':
                    $response =  Beyonic_Collection::get($data);
                    break;

                case 'getAll':
                    $response =  Beyonic_Collection::getAll($data);
                    break;

                case 'delete':
                    $response =  Beyonic_Collection::delete($data);
                    break;

                default:
                    $response = response()->json(['message' => 'Select correct collection type']);
                    break;
            }

            return $response;
    
        } catch (Beyonic_Exception $ex) {

            throw new \Exception($ex->responseBody, $ex->getCode());

        }
    }
    
}

//EOF
