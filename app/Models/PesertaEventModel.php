<?php
namespace App\Models;

use CodeIgniter\Model;

class PesertaEventModel extends BaseModel{
	protected $table = 'peserta_event';
	protected $allowedFields = ['namavideo', 'videourl', 'sequence', 'isactive'];
}

?>