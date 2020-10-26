<?php
use App\Models;
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$event = new \App\Models\EventModel();
		$data['event'] = $event->find(1);
		$data['rangkaianacara'] = $this->rangkaianacara->where('isactive', true)->orderBy('sequence')->findAll();
		$data['merchandise'] = $this->merchandise->join('merchandise_image', 'merchandise.id = merchandise_image.merchandiseid', 'left')->where('isactive', true)->orderBy('merchandise.sequence','ASC')->findAll();

		$this->load_standard_view('home', $data);
	}

	//--------------------------------------------------------------------

}
