<?php
namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends BaseModel{
	protected $table = 'fakultas';
	protected $allowedFields = ['nama', 'singkatan', 'imageurl', 'deskripsi', 'sequence', 'isactive'];
}

?>