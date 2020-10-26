<?php
use App\Models;
namespace App\Controllers;

class Ruangkarya extends BaseController
{
	public function index()
	{
		$data1 = new \App\Models\RuangKaryaKategoriModel();
		$data['kategori'] = $data1->findAll();

		$this->load_standard_view('ruangkarya/main', $data);
	}

	//--------------------------------------------------------------------

}
