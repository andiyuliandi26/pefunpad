<?php
use App\Models;
namespace App\Controllers;

class Ruangkarya extends BaseController
{
	public function index()
	{
		$data['kategori'] = $this->ruangkarya_kategori->findAll();

		$this->load_standard_view('ruangkarya/main', $data);
	}

	public function karyapeserta($id){
		$getKarya = $this->ruangkarya_peserta->select('ruangkarya_peserta.*, ruangkarya_kategori.kategori, ruangkarya_kategori.imagepemenang')->join('ruangkarya_kategori','ruangkarya_kategori.id = ruangkarya_peserta.kategoriid', 'left')->where('kategoriid', $id)->where('isactive', true)->orderBy('statuspeserta', 'ASC')->findAll();
		$komentarList = array();
		
		foreach($getKarya as $items){
			$getKomentar = $this->ruangkarya_comment->where('karyapesertaid', $items->id)->findAll();
			
			if(count($getKomentar) > 0){
				array_push($komentarList,$getKomentar);
			}else{
				array_push($komentarList,array());
			}
		}

		$data['karyapeserta'] = $getKarya;
		$data['komentarkarya'] = $komentarList;

		$this->load_standard_view('ruangkarya/karyapeserta', $data);
	}
}
