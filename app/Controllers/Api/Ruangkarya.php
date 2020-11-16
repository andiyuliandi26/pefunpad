<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Ruangkarya extends BaseAPIController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\MerchandiseModel';
 
    public function index()
    {
        return $this->respond($this->merchandise->findAll(), 200);
    }

    public function addcomment(){
        $data = [
            'karyapesertaid' => $this->request->getPost('karyapesertaid'),
            'comment' => $this->request->getPost('comment'),
            'identitas' => $this->request->getPost('identitas'),
            'ipaddress' => $this->request->getPost('ipaddress'),
            'tanggal' => date('Y-m-d H:i:s'),
            'isactive' => true,
        ];

        $simpan = $this->ruangkarya_comment->save($data);
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