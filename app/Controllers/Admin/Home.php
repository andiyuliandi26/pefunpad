<?php
use App\Models;
namespace App\Controllers\Admin;

class Home extends AdminBaseController
{
	public function index()
	{
		return view("/admin/home");
	}
}
