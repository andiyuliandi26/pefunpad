<?php
namespace App\Models;

use CodeIgniter\Model;

class MerchandiseMarketplaceModel extends BaseModel{
	protected $table = 'merchandise_marketplace';
	protected $allowedFields = ['merchandiseid', 'namamarketplace', 'hyperlink', 'infomarketplace', 'sequence', 'isactive'];
}

?>