<?php
use App\Models;
namespace App\Controllers\Admin;

class Home extends AdminBaseController
{
	public function index()
	{
		session()->set('redirect_url', '/admin');
		$data['visitor'] = ['totalvisitor' => $this->visitor->countvisitor(), 'totalvisitortoday' => $this->visitor->countvisitortoday()];
		return view("/admin/home", $data);
	}
}
