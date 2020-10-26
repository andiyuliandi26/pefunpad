<?php
use App\Models;
namespace App\Controllers;

class Kemahasiswaan extends BaseController
{
	public function index()
	{
		$event = new \App\Models\EventModel();
		$data['event'] = $event->find(1);

		$this->load_standard_view('kemahasiswaan/main', $data);
	}

	//--------------------------------------------------------------------

}
