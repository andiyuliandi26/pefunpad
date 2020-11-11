<?php
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
use App\Models;
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

class BaseAPIController extends ResourceController
{
	#region Base config API
	protected $format = 'json';
	#endregion

	#region Constant List for dropdown
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
	protected $mainevent;
	protected $mainevent_bukutamu;
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
	protected $userEntity;
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
		helper('global');
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->event =  new \App\Models\EventModel();
		$this->event_tamu =  new \App\Models\EventTamuModel();
		$this->fakultas =  new \App\Models\FakultasModel();
		$this->jurusan =  new \App\Models\JurusanModel();
		$this->markipad =  new \App\Models\MarkipadModel();
		$this->mediapartner =  new \App\Models\MediaPartnerModel();
		$this->mainevent =  new \App\Models\MaineventModel();
		$this->mainevent_bukutamu =  new \App\Models\MaineventBukuTamuModel();
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
		$this->virtual_markipad =  new \App\Models\MarkipadModel();
		$this->webinar =  new \App\Models\WebinarModel();
		$this->webinar_peserta =  new \App\Models\WebinarPesertaModel();
		$this->users = model(UserModel::class);
		//$this->userEntity = model(User::class);
		$this->userEntity = model(User::class);
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}
}