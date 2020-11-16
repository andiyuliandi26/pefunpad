<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Merchandise extends BaseAPIController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\MerchandiseModel';
 
    public function index()
    {
        return $this->respond($this->merchandise->findAll(), 200);
    }

    public function getmarketplace($merchandiseID){
        return $this->respond($this->merchandise_marketplace->where('merchandiseid',  $merchandiseID)->orderBy('sequence')->findAll(), 200);   
    }
    
}

?>