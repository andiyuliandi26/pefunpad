<?php
use App\Models;
namespace App\Controllers;

class Webinar extends BaseController
{
	public function index()
	{
		session()->set('redirect_url', '/webinar');
		$this->load_standard_view('webinar/main');
	}

	//--------------------------------------------------------------------

}
