<?php

namespace App\Controllers\Admin;

use App\Models;
use App\Controllers\BaseController;

class AdminBaseController extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{	
		helper('filesystem');

		parent::initController($request, $response, $logger);
	}

	public function index()
	{
		$this->load_standard_view('home');
	}

	//--------------------------------------------------------------------

}
