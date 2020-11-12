<?php
use App\Models;
namespace App\Controllers\Admin;

class Virtualtour extends AdminBaseController
{
	public function index()
	{
		$data['data'] = $this->virtual_tour->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();

		return view('admin/virtualtour/main', $data);
	}

	public function create()
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->virtual_tour->save([
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->virtual_tour->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/virtualtour');
        }
        else
        {
			return view('admin/virtualtour/create');
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			if(!$this->virtual_tour->update($id,[
			    'namavideo' => $this->request->getPost('namavideo'),
			    'videourl' => $this->request->getPost('videourl'),
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			])){		
				session()->setFlashdata('danger', 'Perubahan data gagal. '. $this->virtual_tour->errors());
				return redirect()->back();
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/virtualtour');
        }
        else
        {
			$data['data'] = $this->virtual_tour->find($id);

			return view('admin/virtualtour/update', $data);
        }		
	}
}
