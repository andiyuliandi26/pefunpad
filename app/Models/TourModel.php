<?php
namespace App\Models;

use CodeIgniter\Model;

class TourModel extends BaseModel{
	protected $table = 'virtual_tour';
	protected $allowedFields = ['namavideo', 'videourl', 'sequence', 'isactive'];
}

?>