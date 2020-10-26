<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */
use App\Models;
use CodeIgniter\Controller;

class BaseController extends Controller
{
	#region Load Model
	protected $menu;
	protected $sponsorship;
	protected $socialmedia;
	protected $mediapartner;
	protected $rangkaianacara;
	#endregion
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->menu =  new \App\Models\MenuModel();
		$this->sponsorship =  new \App\Models\SponsorshipModel();
		$this->socialmedia =  new \App\Models\SocialMediaModel();
		$this->mediapartner =  new \App\Models\MediaPartnerModel();
		$this->rangkaianacara =  new \App\Models\RangkaianAcaraModel();
		$this->merchandise =  new \App\Models\MerchandiseModel();

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	protected function load_standard_view($view_path, $data = array())
	{
		$standardData['menu'] = $this->menu->where('isactive', true)->orderBy('sequence')->findAll();
		$standardData['sponsorship'] = $this->sponsorship->where('isactive', true)->orderBy('sequence')->findAll();
		$standardData['mediapartner'] = $this->mediapartner->where('isactive', true)->orderBy('sequence')->findAll();
		$standardData['socialmedia'] = $this->socialmedia->where('isactive', true)->orderBy('sequence')->findAll();

		//var_dump($standardData['merchandise']);
		echo view('layouts/header');
		echo view('layouts/nav', $standardData);
		echo view($view_path, $data);
		echo view('layouts/footer', $standardData);
	}

}
