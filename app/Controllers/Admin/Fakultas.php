<?php
use App\Models;
namespace App\Controllers\Admin;

class Fakultas extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/fakultas';

	public function index()
	{
		$data['fakultas'] = $this->fakultas->findAll();

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

			$this->fakultas->save([
			    'image_url' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'deskripsi' => $this->request->getPost('deskripsi'),
			    'singkatan'  => $this->request->getPost('singkatan'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

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
			
			$imageName = $fakultas->image_url;
			$file = $this->request->getFile('imageupload');
			//var_dump($file->getSize());
			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$fakultas->image_url);
				
			    $imageName = $file->getName();
			}

			$this->fakultas->update($id,[
			    'image_url' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'deskripsi' => $this->request->getPost('deskripsi'),
			    'singkatan'  => $this->request->getPost('singkatan'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

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
