<?php
namespace App\Models;

use CodeIgniter\Model;

class MaineventModel extends BaseModel{
	protected $table = 'mainevent';
	
	protected $allowedFields = ['namaevent', 'eventdatetitle', 'tanggaleventstart', 'tanggaleventend', 'posterurl', 'isactive'];
}

?>