<?php
namespace App\Models;

use CodeIgniter\Model;

class RuangKaryaKategoriModel extends BaseModel{
	protected $table = 'ruangkarya_kategori';
	protected $allowedFields = ['kategori', 'imageurl', 'sequence', 'isactive'];

	public function kategori_list(){
		$returnValue = array();
		$kategoriList = $this->findAll();

		foreach($kategoriList as $items){
            $returnValue += [$items->id => $items->kategori];
        }

		return $returnValue;
	}
}

?>