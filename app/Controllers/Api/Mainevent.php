<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
 
class Mainevent extends BaseAPIController
{
    
    protected $modelName    = 'App\Models\MaineventBukuTamuModel';
 
    public function index()
    {
        return $this->respond($this->model->getData(), 200);
    }

    public function create(){
        $response = array();
        $data = [
            'eventid' => $this->request->getPost('eventid'),
            'namatamu' => $this->request->getPost('namatamu'),
            'email' => $this->request->getPost('email'),
            'nohp' => $this->request->getPost('nohp'),
            'asalsekolah' => $this->request->getPost('asalsekolah'),
            'createddate' => date('Y-m-d H:i:s'),
        ];

        $rules = [
			'namatamu'  => [
                    'rules' => 'required|alpha_numeric_space|min_length[2]',
                    'errors' => [
                        'required' => 'Nama Tamu Wajib diisi',
                        'alpha_numeric_space' => 'Nama Tamu tibak boleh terdapat special karakter',
                        'min_length[1]' => 'Nama Tamu tidak boleh beberapa huruf'
                    ] 
                ],
			'email'  => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Alamat email Wajib diisi',
                        'valid_email' => 'Alamat email tidak valid',
                    ] 
                ],
			'nohp'  => [
                    'rules' => 'required|numeric|min_length[9]',
                    'errors' => [
                        'required' => 'Nomor Handphone Wajib diisi',
                        'numeric' => 'Nomor Handphone hanya angka',
                        'min_length[9]' => 'Nomor Handphone tidak valid, minimal 9 angka'
                    ] 
                ],
			'asalsekolah'  => [
                    'rules' => 'required|alpha_numeric_space|min_length[1]',
                    'errors' => [
                        'required' => 'Asal Sekolah Wajib diisi',
                        'alpha_numeric_space' => 'Asal Sekolah tibak boleh terdapat special karakter',
                        'min_length[1]' => 'Asal Sekolah tidak boleh beberapa huruf'
                    ] 
                ],
		];

		if (! $this->validate($rules))
		{
                $response = [
                    'status' => 404,
                    'error' => true,
                    'response_message' => service('validation')->getErrors(),
                ];

                return $this->respond($response, 200);
		}else{
            if($this->mainevent_bukutamu->save($data)){
                $msg = ['message' => 'Success'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'response_message' => $msg,
                ];

                return $this->respond($response, 200);

            }else{
                $msg = ['message' => 'Bad Request'];
                $response = [
                    'status' => 404,
                    'error' => true,
                    'response_message' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }

        
    }
}

?>