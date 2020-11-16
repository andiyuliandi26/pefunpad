<?php
namespace App\Models;

use CodeIgniter\Model;

class RuangKaryaCommentModel extends BaseModel{
	protected $table = 'ruangkarya_comments';
	protected $allowedFields = ['karyapesertaid', 'comment', 'identitas','ipaddress', 'tanggal', 'isactive'];
}

?>