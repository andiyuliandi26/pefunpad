<?php
use App\Models;
namespace App\Controllers;

class Fakultas extends BaseController
{
	public function index()
	{
		$data1 = new \App\Models\FakultasModel();
		$data['fakultas'] = $data1->findAll();

		$this->load_standard_view('fakultas/main', $data);
	}

	//--------------------------------------------------------------------

}
