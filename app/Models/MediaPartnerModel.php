<?php
namespace App\Models;

use CodeIgniter\Model;

class MediaPartnerModel extends BaseModel{
	protected $table = 'mediapartner';
	
	protected $allowedFields = ['nama', 'type', 'imageurl', 'hyperlink', 'sequence', 'isactive', 'width','height'];
}

?>