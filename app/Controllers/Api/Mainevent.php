<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Mainevent extends ResourceController
{
    
    protected $modelName    = 'App\Models\MaineventBukuTamuModel';
 
    public function index()
    {
        return $this->respond($this->model->getData(), 200);
    }

    public function create(){
        $data = [
            'eventid' => $this->request->getPost('eventid'),
            'namatamu' => $this->request->getPost('namatamu'),
            'email' => $this->request->getPost('email'),
            'nohp' => $this->request->getPost('nohp'),
            'asalsekolah' => $this->request->getPost('asalsekolah'),
        ];

        $simpan = $this->model->insertData($data);
        if($simpan){
            $msg = ['message' => 'Success'];
            $response = [
                'status' => 200,
                'error' => false,
                'data' => $msg,
            ];
            return $this->respond($response, 200);
        }else{
             $msg = ['message' => 'Bad Request'];
                $response = [
                    'status' => 404,
                    'error' => true,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
        }
    }
}

?>