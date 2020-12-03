<?php
use App\Models;
namespace App\Controllers;

class Mainevent extends BaseController
{
	public function index()
	{
		$data['event'] = $this->mainevent->find(1);		
		$data['inputbukutamu'] = array('value' => 'false' );

		$this->load_standard_view('mainevent/main', $data);
	}

	public function noinput()
	{
		$data['event'] = $this->mainevent->find(1);
		$data['inputbukutamu'] = array( 'value' => 'true' );

		$this->load_standard_view('mainevent/main', $data);
	}
	//--------------------------------------------------------------------

}
