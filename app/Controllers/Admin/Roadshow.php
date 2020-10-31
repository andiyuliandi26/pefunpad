<?php
use App\Models;
namespace App\Controllers\Admin;

class Roadshow extends AdminBaseController
{
	public function index()
	{
		$data['data'] = $this->virtual_roadshow->findAll();

		return view('admin/roadshow/main', $data);
	}

	public function create()
	{
		if ($this->request->getMethod() === 'post')
        {
			$this->virtual_roadshow->save([
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/roadshow');
        }
        else
        {
			return view('admin/roadshow/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$this->virtual_roadshow->update($id,[
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/roadshow');
        }
        else
        {
			$data['data'] = $this->virtual_roadshow->find($id);

			return view('admin/roadshow/update', $data);
        }		
	}
}
