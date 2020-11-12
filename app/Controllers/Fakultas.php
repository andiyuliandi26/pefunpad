<?php
use App\Models;
namespace App\Controllers;

class Fakultas extends BaseController
{
	public function index()
	{
		$data['fakultas'] = $this->fakultas->where('isactive', true)->orderby('sequence')->findAll();
		$data['markipad'] = $this->virtual_markipad->where('isactive', true)->orderby('sequence')->findAll();

		$this->load_standard_view('fakultas/main', $data);
	}

	public function detail($id)
	{
		$data['fakultas'] = $this->fakultas->find($id);

		$this->load_standard_view('fakultas/detail', $data);
	}
	//--------------------------------------------------------------------

}
