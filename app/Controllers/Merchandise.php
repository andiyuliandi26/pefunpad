<?php
use App\Models;
namespace App\Controllers;

class Merchandise extends BaseController
{
	public function index()
	{
		$data['merchandise'] = $this->merchandise->where('isactive', true)->orderBy('sequence')->findAll();


		$this->load_standard_view('merchandise/main', $data);
	}

	//--------------------------------------------------------------------

}
