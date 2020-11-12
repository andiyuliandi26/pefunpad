<?php
namespace App\Models;

use CodeIgniter\Model;

class SponsorshipModel extends BaseModel{
	protected $table = 'sponsorship';
	protected $allowedFields = ['nama', 'type', 'imageurl', 'hyperlink', 'sequence', 'isactive', 'width','height'];
}

?>