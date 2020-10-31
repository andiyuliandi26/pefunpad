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
	#region Contanta List for dropdown
	public $rk_status = ['Juara 1' => 'Juara 1', 'Juara 2' => 'Juara 2',' Juara 3' => 'Juara 3', 'Peserta' => 'Peserta'];
	public $rk_jenis = ['Dokumen' => 'Dokumen', 'Video' => 'Video' , 'Audio' => 'Audio'];
	#endregion
	
	#region Load Model	protected $fakultas;
	protected $jurusan;
	protected $event;
	protected $event_tamu;
	protected $mediapartner;
	protected $menu;
	protected $merchandise;
	protected $merchandise_marketplace;
	protected $rangkaianacara;
	protected $ruangkarya_comment;
	protected $ruangkarya_kategori;
	protected $ruangkarya_peserta;	
	protected $ruangkarya_rating;	
	protected $socialmedia;
	protected $sponsorship;
	protected $virtual_markipad;
	protected $virtual_roadshow;
	protected $virtual_tour;
	protected $webinar;
	protected $webinar_peserta;
	protected $users;
	#endregion
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['auth'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		helper('auth');		
		helper('form');
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->event =  new \App\Models\EventModel();
		$this->event_tamu =  new \App\Models\EventTamuModel();
		$this->fakultas =  new \App\Models\FakultasModel();
		$this->jurusan =  new \App\Models\JurusanModel();
		$this->markipad =  new \App\Models\MarkipadModel();
		$this->mediapartner =  new \App\Models\MediaPartnerModel();
		$this->merchandise =  new \App\Models\MerchandiseModel();
		$this->merchandise_marketplace =  new \App\Models\MerchandiseMarketplaceModel();
		$this->menu =  new \App\Models\MenuModel();
		$this->rangkaianacara =  new \App\Models\RangkaianAcaraModel();
		$this->virtual_roadshow =  new \App\Models\RoadshowModel();
		$this->ruangkarya_comment =  new \App\Models\RuangKaryaCommentModel();
		$this->ruangkarya_kategori =  new \App\Models\RuangKaryaKategoriModel();
		$this->ruangkarya_peserta =  new \App\Models\RuangKaryaPesertaModel();
		$this->ruangkarya_rating =  new \App\Models\RuangKaryaRatingModel();
		$this->socialmedia =  new \App\Models\SocialMediaModel();
		$this->sponsorship =  new \App\Models\SponsorshipModel();
		$this->virtual_tour =  new \App\Models\TourModel();
		$this->webinar =  new \App\Models\WebinarModel();
		$this->webinar_peserta =  new \App\Models\WebinarPesertaModel();

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

	protected function load_admin_view($view_path, $data = array())
	{

		echo view('admin/layouts/header');
		echo view('admin/'. $view_path, $data);
	}

}
