<?php

namespace Laraman\Beyonic\Http\Controllers;

use Illuminate\Http\Request;
use Laraman\Beyonic\Http\Handlers\RequestHandler;


class BeyonicController extends RequestHandler
{

    public function createCollection($data) {

        return $this->beyonicRequestHandler('collection', 'create', $data);
    
    }

    public function getAllCollections($data = NULL) {

        return $this->beyonicRequestHandler('collection', 'getAll', $data);
    
    }

    public function getCollection($data = NULL) {
        
        return $this->beyonicRequestHandler('collection', 'get', $data);
    
    }

    public function updateCollection($data) {
        
        return $this->beyonicRequestHandler('collection', 'update', $data);
    
    }

    public function deleteCollection($data) {
        
        return $this->beyonicRequestHandler('collection', 'delete', $data);
    
    }

}

// EOF
