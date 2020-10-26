<?php
use App\Models;
namespace App\Controllers;

class Webinar extends BaseController
{
	public function index()
	{
		$event = new \App\Models\EventModel();
		$data['event'] = $event->find(1);

		$this->load_standard_view('webinar/main', $data);
	}

	//--------------------------------------------------------------------

}
