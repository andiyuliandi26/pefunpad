<?php
namespace App\Models;

use CodeIgniter\Model;

class MerchandiseModel extends BaseModel{
	protected $table = 'merchandise';
	protected $allowedFields = ['namaproduk', 'deskripsi', 'harga', 'imageurl', 'sequence', 'isactive'];
}

?>