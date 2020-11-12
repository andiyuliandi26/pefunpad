<?php
use App\Models;
namespace App\Controllers\Admin;

class Sponsorship extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/sponsorship';

	public function index()
	{
		$data['sponsorship'] = $this->sponsorship->orderBy('isactive', 'DESC')->orderBy('sequence')->findAll();

		return view('admin/sponsorship/main', $data);
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

			if(!$this->sponsorship->save([
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'type' => $this->request->getPost('type'),
			    'hyperlink'  => $this->request->getPost('hyperlink'),
			    'width'  => '150',
			    'height'  => '60',
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->sponsorship->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/sponsorship');
        }
        else
        {
			return view('admin/sponsorship/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$sponsorship = $this->sponsorship->find($id);
			
			$imageName = $sponsorship->imageurl;
			$file = $this->request->getFile('imageupload');

			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$sponsorship->image_url);
				
			    $imageName = $file->getName();
			}

			if(!$this->sponsorship->update($id,[
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'type' => $this->request->getPost('type'),
			    'hyperlink'  => $this->request->getPost('hyperlink'),
			    'width'  => '150',
			    'height'  => '60',
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->sponsorship->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/sponsorship');
        }
        else
        {
			$data['sponsorship'] = $this->sponsorship->find($id);

			return view('admin/sponsorship/update', $data);
        }		
	}
}
