<?php
namespace App\Models;

use CodeIgniter\Model;

class RuangKaryaPesertaModel extends BaseModel{
	protected $table = 'ruangkarya_peserta';

	protected $allowedFields = ['kategoriid', 'namapeserta', 'deskripsipeserta','judulkarya','jeniskarya','urlkarya','statuspeserta', 'isactive'];
}

?>