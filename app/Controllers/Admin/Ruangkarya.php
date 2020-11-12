<?php
use App\Models;
namespace App\Controllers\Admin;

class Ruangkarya extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/ruangkarya';

	#region Kategori
	public function kategori()
	{
		$data['data'] = $this->ruangkarya_kategori->orderBy('isactive', 'ASC')->orderBy('sequence')->findAll();

		return view('admin/ruangkarya/kategori', $data);
	}

	public function kategori_create()
	{
		if ($this->request->getMethod() === 'post')
        {
			$imageName = "";
			$file = $this->request->getFile('imageupload');
			//var_dump($file->getSize());
			if($file->getSize() > 0){
			    $file->move($this->uploadPath);
				
			    $imageName = $file->getName();
			}

			$this->ruangkarya_kategori->save([
			    'imageurl' => $imageName,
			    'kategori' => $this->request->getPost('kategori'),			    
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/ruangkarya/kategori');
        }
        else
        {
			return view('admin/ruangkarya/kategori_create');
        }
	}

	public function kategori_update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$fakultas = $this->ruangkarya_kategori->find($id);
			
			$imageName = $fakultas->imageurl;
			$file = $this->request->getFile('imageupload');
			//var_dump($file->getSize());
			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$fakultas->imageurl);
				
			    $imageName = $file->getName();
			}

			$this->ruangkarya_kategori->update($id,[
			    'imageurl' => $imageName,
			    'kategori' => $this->request->getPost('kategori'),			    
			    'isactive'  => $this->request->getPost('isactive'),
			    'sequence'  => $this->request->getPost('sequence'),
			]);

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/ruangkarya/kategori');
        }
        else
        {
			$data['data'] = $this->ruangkarya_kategori->find($id);

			return view('admin/ruangkarya/kategori_update', $data);
        }		
	}
	#endregion

	#region Peserta
	public function peserta()
	{
		$data['data'] = $this->ruangkarya_peserta->select('ruangkarya_peserta.*, ruangkarya_kategori.kategori')->join('ruangkarya_kategori','ruangkarya_kategori.id = ruangkarya_peserta.kategoriid')->findAll();

		return view('admin/ruangkarya/peserta', $data);
	}

	public function peserta_create()
	{
		if ($this->request->getMethod() === 'post')
        {
			$this->ruangkarya_peserta->save([
			    'kategoriid' => $this->request->getPost('kategoriid'),			    
			    'namapeserta' => $this->request->getPost('namapeserta'),			    
			    'deskripsipeserta' => $this->request->getPost('deskripsipeserta'),			    
			    'judulkarya' => $this->request->getPost('judulkarya'),			    
			    'jeniskarya' => $this->request->getPost('jeniskarya'),			    
			    'statuspeserta' => $this->request->getPost('statuspeserta'),			    
			    'isactive'  => $this->request->getPost('isactive'),
			]);

			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/ruangkarya/peserta');
        }
        else
        {
			$data['kategorilist'] = $this->ruangkarya_kategori->kategori_list();
			$data['jeniskaryalist'] = $this->rk_jenis;
			$data['statuspesertalist'] = $this->rk_status;

			return view('admin/ruangkarya/peserta_create', $data);
        }
	}

	public function peserta_update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$this->ruangkarya_peserta->update($id,[
			    'kategoriid' => $this->request->getPost('kategoriid'),			    
			    'namapeserta' => $this->request->getPost('namapeserta'),			    
			    'deskripsipeserta' => $this->request->getPost('deskripsipeserta'),			    
			    'judulkarya' => $this->request->getPost('judulkarya'),			    
			    'jeniskarya' => $this->request->getPost('jeniskarya'),			    
			    'urlkarya' => $this->request->getPost('urlkarya'),			    
			    'statuspeserta' => $this->request->getPost('statuspeserta'),			    
			    'isactive'  => $this->request->getPost('isactive'),
			]);

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/ruangkarya/peserta');
        }
        else
        {
			$data['data'] = $this->ruangkarya_peserta->find($id);			
			$data['kategorilist'] = $this->ruangkarya_kategori->kategori_list();
			$data['jeniskaryalist'] = $this->rk_jenis;
			$data['statuspesertalist'] = $this->rk_status;

			return view('admin/ruangkarya/peserta_update', $data);
        }		
	}
	#endregion
}
