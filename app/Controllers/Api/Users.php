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
				$newObj = array();
				array_push($newObj,$data['A']); // Username
				array_push($newObj,$data['B']); // Email
				array_push($newObj,$data['C']); // Password
				array_push($newObj,$data['D']); // Nama User
				array_push($newObj,$data['E']); // No HP user

				array_push($returnValue, $newObj);
			}
			//var_dump($returnValue);
			return $this->respond($returnValue, 200);
		}else{
			return $this->respond("Error", 200);
		}
    }

	public function save_data_peserta(){
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
			$jumlahSukses = 0;
			$errorList= array();
			$jumlahGagal = 0;
			//looping untuk mengambil data
			$this->users->transBegin();

			foreach ($sheet as $idx => $data) {
			    //skip index 1 karena title excel
			    if($idx==1){
			        continue;
			    }

				$user = new \Myth\Auth\Entities\User();
				$user->username = $data['A']; // Username
				$user->email = $data['B']; // Email
				$user->password = $data['C']; // Password
				//$user-username = $data['D']; // Nama User
				//$user-username = $data['E']; // No HP user
				$user->active = true;

				$this->users = $this->users->withGroup('member');

				

				if ($this->users->save($user))
				{
					$jumlahSukses++;
					//return redirect()->back()->withInput()->with('errors', $this->users->errors());
				}else{

					array_push($errorList, ['error_msg' => $this->users->errors(), 'Username : ' => $user->username]);
					$jumlahGagal++;
				}
			}

			if ($this->users->transStatus() === FALSE || $jumlahGagal > 0)
			{
					$this->users->transRollback();
			}
			else
			{
					$this->users->transCommit();
			}

			array_push($returnValue, ['JumlahSukses' => $jumlahSukses, 'JumlahGagal' => $jumlahGagal, 'Error' => $errorList]);
			//var_dump($returnValue);
			return $this->respond($returnValue, 200);
		}else{
			return $this->respond("Error", 200);
		}
    }

	public function save_data_panitia(){
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
			$jumlahSukses = 0;
			$errorList= array();
			$jumlahGagal = 0;
			//looping untuk mengambil data
			$this->users->transStart(true);
			foreach ($sheet as $idx => $data) {
			    //skip index 1 karena title excel
			    if($idx==1){
			        continue;
			    }

				$user = new \Myth\Auth\Entities\User();
				$user->username = $data['A']; // Username
				$user->email = $data['B']; // Email
				$user->password = $data['C']; // Password
				//$user-username = $data['D']; // Nama User
				//$user-username = $data['E']; // No HP user
				$user->active = true;

				$this->users = $this->users->withGroup('panitia');

				

				if ($this->users->save($user))
				{
					$jumlahSukses++;
					//return redirect()->back()->withInput()->with('errors', $this->users->errors());
				}else{

					array_push($errorList, ['error_msg' => $this->users->errors(), 'Username : ' => $user->username]);
					$jumlahGagal++;
				}


				//$newObj = array();
				//array_push($newObj,$data['A']);
				//array_push($newObj,$data['B']); // Email
				//array_push($newObj,$data['C']); // Password
				//array_push($newObj,$data['D']); // Nama User
				//array_push($newObj,$data['E']); // No HP user

				//array_push($returnValue, $newObj);
			}

			if ($this->users->transStatus() === FALSE || $jumlahGagal > 0)
			{
					$this->users->transRollback();
			}
			else
			{
					$this->users->transCommit();
			}

			array_push($returnValue, ['JumlahSukses' => $jumlahSukses, 'JumlahGagal' => $jumlahGagal, 'Error' => $errorList]);
			//var_dump($returnValue);
			return $this->respond($returnValue, 200);
		}else{
			return $this->respond("Error", 200);
		}
    }
}

?>