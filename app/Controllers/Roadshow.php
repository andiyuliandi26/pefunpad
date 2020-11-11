<?php
use App\Models;
namespace App\Controllers;

class Roadshow extends BaseController
{
	public function index()
	{
		$roadshow = new \App\Models\RoadshowModel();
		$data['roadshow'] = $roadshow->where('isactive', true)->findAll();

		$this->load_standard_view('roadshow/main', $data);
	}

	//--------------------------------------------------------------------

}
