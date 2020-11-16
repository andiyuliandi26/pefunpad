<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
use Myth\Auth\Models\UserModel;
use PHPExcel;
use PHPExcel_IOFactory;
 
class Users extends BaseAPIController
{
    protected $format       = 'json';
    protected $modelName    = 'Myth\Auth\Models\UserModel';
 
    public function index()
    {
        return $this->respond($this->users->findAll(), 200);
    }

    public function validasi_file_excel(){
		$returnValue = array();
		$file = $this->request->getFile('file-0');
		if($file){
			$excelReader  = new PHPExcel();
			//mengambil lokasi temp file
			$fileLocation = $file->getTempName();
			//baca file
			$objPHPExcel = PHPExcel_IOFactory::load($fileLocation);
			//ambil sheet active
			$sheet	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			//looping untuk mengambil data
			foreach ($sheet as $idx => $data) {
			    //skip index 1 karena title excel
			    if($idx==1){
			        continue;
			    }
			    $nama = $data['A'];
				//var_dump($data);
			    //$hp = $data['B'];
			    $email = $data['B'];
			    //// insert data
			    //$this->contact->insert([
			    //    'nama'=>$nama,
			    //    'handphone'=>$hp,
			    //    'email'=>$email
			    //]);
				array_push($returnValue, $nama);
			}
			//var_dump($returnValue);
			return $this->respond($returnValue, 200);
		}else{
			return $this->respond("Error", 200);
		}
    }
}

?>