<?php

namespace Laraman\Beyonic\Http\Controllers;

use Illuminate\Http\Request;
use Laraman\Beyonic\Http\Handlers\RequestHandler;


class BeyonicController extends RequestHandler
{

    public function createCollectionRequest($data) {

        return $this->collectionRequestHandler('create', $data);
    
    }

    public function getAllCollectionRequests($data = NULL) {

        return $this->collectionRequestHandler('getAll', $data);
    
    }

    public function getCollectionRequest($data = NULL) {
        
        return $this->collectionRequestHandler('get', $data);
    
    }

    public function updateCollectionRequest($id, $data) {
        
        return $this->collectionRequestHandler('update', $data, $id);
    
    }

    public function deleteCollectionRequest($id) {
        
        return $this->collectionRequestHandler('delete', $id);
    
    }

    /*
    | Handle Collections
    |
    */

    public function getAllCollections($data = NULL) {

        return $this->collectionHandler('getAll', $data);
    
    }

    public function getCollection($data = NULL) {
        
        return $this->collectionHandler('get', $data);
    
    }

    public function deleteCollection($id) {
        
        return $this->collectionHandler('delete', $id);
    
    }


    /*
    | Handle Payment Requests
    |
    */

    public function createPayment($data) {

        return $this->paymentHandler('create', $data);
    
    }

    public function getAllPayments($data = NULL) {

        return $this->paymentHandler('getAll', $data);
    
    }

    public function getPayment($data = NULL) {
        
        return $this->paymentHandler('get', $data);
    
    }

    public function updatePayment($id, $data) {
        
        return $this->paymentHandler('update', $data, $id);
    
    }

    public function deletePayment($id) {
        
        return $this->paymentHandler('delete', $id);
    
    }

}

// EOF
