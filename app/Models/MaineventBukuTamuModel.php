<?php
namespace App\Models;

use CodeIgniter\Model;

class MaineventBukuTamuModel extends BaseModel{
	protected $table = 'mainevent_bukutamu';

	protected $allowedFields = ['eventid', 'namatamu', 'email', 'nohp', 'asalsekolah', 'createddate'];
}

?>