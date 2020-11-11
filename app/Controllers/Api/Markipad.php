<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Markipad extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\MarkipadModel';
 
    public function index()
    {
        return $this->respond($this->model->where('isactive', true)->findAll(), 200);
    }
}

?>