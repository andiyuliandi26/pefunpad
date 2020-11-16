<?php
use App\Models;
namespace App\Controllers;

class Virtualtour extends BaseController
{
	public function index()
	{
		$data['data'] =  $this->virtual_tour->where('isactive', true)->orderby('sequence')->findAll();

		$this->load_standard_view('virtualtour/main', $data);
	}

	//--------------------------------------------------------------------

}
