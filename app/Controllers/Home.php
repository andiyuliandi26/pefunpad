<?php
use App\Models;
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$agent = $this->request->getUserAgent();
		$data['event'] = $this->event->find(1);
		$data['rangkaianacara'] = $this->rangkaianacara->where('isactive', true)->orderBy('sequence')->findAll();
		$data['merchandise'] = $this->merchandise->join('merchandise_image', 'merchandise.id = merchandise_image.merchandiseid', 'left')->where('isactive', true)->orderBy('merchandise.sequence','ASC')->findAll();
		$this->visitor->addvisitor($agent);
		//var_dump($this->visitor->countvisitortoday());
		$this->load_standard_view('home-new', $data);
	}

	//--------------------------------------------------------------------

}
