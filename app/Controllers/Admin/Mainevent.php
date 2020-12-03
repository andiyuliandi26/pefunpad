<?php
use App\Models;
namespace App\Controllers\Admin;

class Mainevent extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/mainevent';

	public function index()
	{
		
		if ($this->request->getMethod() === 'post')
        {
			$data = $this->mainevent->find(1);
			
			$imageName = $data->posterurl;
			$file = $this->request->getFile('imageupload');

			if($file->getSize() > 0){
			    $file->move($this->uploadPath);

				unlink($this->uploadPath.'/'.$data->imageurl);
				
			    $imageName = $file->getName();
			}

			$this->mainevent->update(1,[
			    'namaevent' => $this->request->getPost('namaevent'),
			    'eventdatetitle' => $this->request->getPost('eventdatetitle'),
			    'tanggaleventstart'  => $this->request->getPost('tanggaleventstart'),
			    'tanggaleventend'  => $this->request->getPost('tanggaleventend'),
			    'livestreamingurl'  => $this->request->getPost('livestreamingurl'),
			    'posterurl'  => $imageName,
			    'isactive'  => $this->request->getPost('isactive'),
			]);

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->back();
        }
        else
        {
			$data['data'] = $this->mainevent->find(1);

			return view('admin/mainevent/main', $data);
        }		
	}

	public function bukutamu()
	{
		$data['data'] = $this->mainevent_bukutamu->where('eventid',1)->findAll();

		return view('admin/mainevent/bukutamu', $data);
	}
}
