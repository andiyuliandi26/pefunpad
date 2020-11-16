<?php
namespace App\Models;

use CodeIgniter\Model;

class RuangKaryaPesertaModel extends BaseModel{
	protected $table = 'ruangkarya_peserta';

	protected $allowedFields = ['kategoriid', 'namatim', 'namapeserta','asalsekolah', 'judulkarya','jeniskarya','videourl','imageurl','statuspeserta', 'isactive'];
}

?>