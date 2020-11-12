<?php
use App\Models;
namespace App\Controllers\Admin;

class Fakultas extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/fakultas';

	public function index()
	{
		$data['fakultas'] = $this->fakultas->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();

		return view('admin/fakultas/main', $data);
	}

	public function create()
	{
		if ($this->request->getMethod() === 'post')
        {
			$imageName = "";
			$file = $this->request->getFile('imageupload');
			//var_dump($file->getSize());
			if($file->getSize() > 0){
			    $file->move($this->uploadPath);
				
			    $imageName = $file->getName();
			}

			if(!$this->fakultas->save([
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'deskripsi' => $this->request->getPost('deskripsi'),
			    'singkatan'  => $this->request->getPost('singkatan'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal.'. $this->fakultas->errors());
				return redirect()->back();
				
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/fakultas');
        }
        else
        {
			return view('admin/fakultas/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$fakultas = $this->fakultas->find($id);
			
			$imageName = $fakultas->imageurl;
			$file = $this->request->getFile('imageupload');
			//var_dump($file->getSize());
			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$fakultas->imageurl);
				
			    $imageName = $file->getName();
			}

			if(!$this->fakultas->update($id,[
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'deskripsi' => $this->request->getPost('deskripsi'),
			    'singkatan'  => $this->request->getPost('singkatan'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal.'. $this->fakultas->errors());
				return redirect()->back();
				
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/fakultas');
        }
        else
        {
			$data['fakultas'] = $this->fakultas->find($id);

			return view('admin/fakultas/update', $data);
        }		
	}
}
