<?php
use App\Models;
namespace App\Controllers\Admin;

class Merchandise extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/merchandise';

	public function index()
	{
		$data['data'] = $this->merchandise->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();
		$data['merchmarket'] = $this->merchandise_marketplace->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();

		return view('admin/merchandise/main', $data);
	}

	public function create()
	{
		if ($this->request->getMethod() === 'post')
        {
			$imageName = $this->request->getPost('namaproduk');
			$file = $this->request->getFile('imageupload');

			if($file->getSize() > 0){
			    $file->move($this->uploadPath, $imageName.'png');
			}

			if(!$this->merchandise->save([
				'imageurl' => $imageName,
			    'namaproduk' => $this->request->getPost('namaproduk'),
			    'deskripsi' => $this->request->getPost('deskripsi'),
			    'harga' => $this->request->getPost('harga'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->merchandise->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/merchandise');
        }
        else
        {
			return view('admin/merchandise/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->merchandise->update($id,[
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->merchandise->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/merchandise');
        }
        else
        {
			$data['data'] = $this->merchandise->find($id);

			return view('admin/merchandise/update', $data);
        }		
	}

	public function marketplace($id)
	{
		$data['data'] = $this->merchandise->find($id);
		$data['merchmarket'] = $this->merchandise_marketplace->where('merchandiseid', $id)->where('isactive',true)->findAll();

		return view('admin/merchandise/marketplace', $data);
	}

	public function marketplace_create($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			if($this->merchandise_marketplace->save([
			    'merchandiseid' => $id,
			    'namamarketplace' => $this->request->getPost('namamarket'),
			    'infomarketplace' => $this->request->getPost('infomarketplace'),
			    'hyperlink' => $this->request->getPost('hyperlink'),
			    'sequence'  => $this->request->getPost('sequencemarket'),
			    'isactive'  => 1,
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->merchandise_marketplace->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/merchandise/marketplace/'.$id);
        }

		return NULL;
	}

	public function marketplace_update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->merchandise_marketplace->update($id,[
			    'namamarketplace' => $this->request->getPost('namamarket'),
			    'hyperlink' => $this->request->getPost('hyperlink'),
			    'infomarketplace' => $this->request->getPost('infomarketplace'),
			    'sequence'  => $this->request->getPost('sequence'),
			    'isactive'  => $this->request->getPost('isactive'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->merchandise_marketplace->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/merchandise/marketplace/'.$this->request->getPost('merchandiseid'));
        }

		return NULL;
	}
}
