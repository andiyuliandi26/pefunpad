<?php
use App\Models;
namespace App\Controllers;

class Mainevent extends BaseController
{
	public function index()
	{
		$data['event'] = $this->mainevent->find(1);

		$this->load_standard_view('mainevent/main', $data);
	}

	//--------------------------------------------------------------------

}
