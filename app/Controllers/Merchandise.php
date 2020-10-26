<?php
use App\Models;
namespace App\Controllers;

class Merchandise extends BaseController
{
	public function index()
	{
		$data['merchandise'] = $this->merchandise->join('merchandise_image', 'merchandise.id = merchandise_image.merchandiseid', 'left')->where('isactive', true)->orderBy('merchandise.sequence')->findAll();


		$this->load_standard_view('merchandise/main', $data);
	}

	//--------------------------------------------------------------------

}
