<?php
use App\Models;
namespace App\Controllers\Admin;

class Home extends AdminBaseController
{
	public function index()
	{
		session()->set('redirect_url', '/admin');
		return view("/admin/home");
	}
}
