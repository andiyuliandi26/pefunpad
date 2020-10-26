<?php
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model{
	protected $DBGroup = 'default';
	protected $primaryKey = 'id';
	protected $returnType     = 'object';
}

?>