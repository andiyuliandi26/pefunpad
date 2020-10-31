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
		$data['karyapeserta'] = $this->ruangkarya_peserta->join('ruangkarya_kategori','ruangkarya_kategori.id = ruangkarya_peserta.kategoriid', 'left')->where('kategoriid', $id)->findAll();
		$this->load_standard_view('ruangkarya/karyapeserta', $data);
	}
}
