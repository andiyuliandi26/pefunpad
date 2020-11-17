<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Merchandise extends BaseAPIController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\MerchandiseModel';
 
    public function index()
    {
        return $this->respond($this->merchandise->where('isactive',true)->orderBy('sequence')->findAll(), 200);
    }

    public function getmarketplace($merchandiseID){
        return $this->respond($this->merchandise_marketplace->where('merchandiseid',  $merchandiseID)->where('isactive',true)->orderBy('sequence')->findAll(), 200);   
    }
    
}

?>