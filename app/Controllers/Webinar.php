<?php
use App\Models;
namespace App\Controllers;

class Webinar extends BaseController
{
	public function index()
	{
		$this->load_standard_view('webinar/main');
	}

	//--------------------------------------------------------------------

}
