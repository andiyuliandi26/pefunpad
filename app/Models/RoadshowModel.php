<?php
namespace App\Models;

use CodeIgniter\Model;

class RoadshowModel extends BaseModel{
	protected $table = 'virtual_roadshow';
	protected $allowedFields = ['namavideo', 'videourl', 'sequence', 'isactive'];
}

?>