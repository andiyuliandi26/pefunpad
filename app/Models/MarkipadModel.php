<?php
namespace App\Models;

use CodeIgniter\Model;

class MarkipadModel extends BaseModel{
	protected $table = 'virtual_markipad';
	
	protected $allowedFields = ['namavideo', 'videourl', 'sequence', 'isactive'];
}

?>