<?php
use App\Models;
namespace App\Controllers;

class Openmic extends BaseController
{
	public function index()
	{
		$this->load_standard_view('openmic/main');
	}

	//--------------------------------------------------------------------

}
