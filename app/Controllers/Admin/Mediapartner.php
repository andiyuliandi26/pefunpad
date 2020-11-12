<?php
use App\Models;
namespace App\Controllers\Admin;

class Mediapartner extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/mediapartner';

	public function index()
	{
		$data['mediapartner'] = $this->mediapartner->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();

		return view('admin/mediapartner/main', $data);
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

			if(!$this->mediapartner->save([
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'type' => $this->request->getPost('type'),
			    'hyperlink'  => $this->request->getPost('hyperlink'),
			    'width'  => '150',
			    'height'  => '60',
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->mediapartner->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/mediapartner');
        }
        else
        {
			return view('admin/mediapartner/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$mediapartner = $this->mediapartner->find($id);
			
			$imageName = $mediapartner->imageurl;
			$file = $this->request->getFile('imageupload');

			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$mediapartner->imageurl);
				
			    $imageName = $file->getName();
			}

			if(!$this->mediapartner->update($id,[
			    'imageurl' => $imageName,
			    'nama' => $this->request->getPost('nama'),
			    'type' => $this->request->getPost('type'),
			    'hyperlink'  => $this->request->getPost('hyperlink'),
			    'width'  => '150',
			    'height'  => '60',
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->mediapartner->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/mediapartner');
        }
        else
        {
			$data['mediapartner'] = $this->mediapartner->find($id);

			return view('admin/mediapartner/update', $data);
        }		
	}
}
