<?php
use App\Models;
namespace App\Controllers\Admin;

class Markipad extends AdminBaseController
{
	public function index()
	{
		$data['data'] = $this->virtual_markipad->findAll();

		return view('admin/markipad/main', $data);
	}

	public function create()
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->virtual_markipad->save([
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->virtual_markipad->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/markipad');
        }
        else
        {
			return view('admin/markipad/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->virtual_markipad->update($id,[
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->virtual_markipad->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/markipad');
        }
        else
        {
			$data['data'] = $this->virtual_markipad->find($id);

			return view('admin/markipad/update', $data);
        }		
	}
}
