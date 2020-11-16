<?php
use App\Models;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
namespace App\Controllers\Admin;

class Users extends AdminBaseController
{
	private $uploadPath = ROOTPATH .'public/images/fakultas';
	//private $users = new Myth\Auth\Models\UserModel;
	public function __construct()
	{
		// Most services in this controller require
		// the session to be started - so fire it up!
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
	}

	public function index()
	{
		$data['data'] = $this->users->
							select('users.*, auth_groups.name')
							->join('auth_groups_users','auth_groups_users.user_id = users.id', 'left')
							->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id', 'left')
							->findAll();

		return view('admin/users/main', $data);
	}

	public function create()
	{
		//$userEntity = new User();
		if ($this->request->getMethod() === 'post')
        {
			$rules = [
				'username'  	=> 'required|alpha_numeric_space|min_length[3]|is_unique[users.username]',
				'email'			=> 'required|valid_email|is_unique[users.email]',
				'password'	 	=> 'required|strong_password',
			];

			if (! $this->validate($rules))
			{
				return redirect()->back()->withInput()->with('errors', service('validation')->getErrors());
			}

			$allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
			$user = new \Myth\Auth\Entities\User($this->request->getPost($allowedPostFields));
			$user->active = true;

			$this->users = $this->users->withGroup($this->request->getPost('authgroups'));

			if (! $this->users->save($user))
			{
				return redirect()->back()->withInput()->with('errors', $this->users->errors());
			}
			//$user = new \Myth\Auth\Entities\User();
			//$user = new UserEntitiy();
			//$this->users->save([
			//    'username' => $this->request->getPost('username'),
			//    'email' => $this->request->getPost('email'),
			//    'password' => $this->userEntity->setPassword($this->request->getPost('password')),
			//    'active'  => 1,
			//]);
			//$user->password = '1234566';
			//var_dump($user);
			session()->setFlashdata('success', 'Penambahan data berhasil');
			return redirect()->to('/admin/users');
        }
        else
        {
			$data['roleslist'] = $this->auth_groups->groupList();
			return view('admin/users/create', $data);
        }
	}

	public function update($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$userid = $this->request->getPost('userid');
			$user = $this->users->find($userid);
			$user->updated_at = date("Y-m-d H:i:s");
			$getGroup = $this->auth_groups->getGroupsByName($this->request->getPost('authgroups'));
			$this->auth_groups->removeUserFromAllGroups($userid);
			$this->auth_groups->addUserToGroup($userid, $getGroup->id);

			if (!$this->users->update($user->id, $user))
			{
			    return redirect()->back()->withInput()->with('errors', $this->users->errors());
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/users');
        }
        else
        {
			$user =  $this->users->find($id);
			$data['user'] = $this->users->find($id);
			$data['usergroups'] = $this->auth_groups->getGroupsForUser($user->id);
			$data['roleslist'] = $this->auth_groups->groupList();

			return view('admin/users/update', $data);
        }		
	}

	public function setpassword($id)
	{
		if ($this->request->getMethod() === 'post')
        {
			$userid = $this->request->getPost('userid');
			$user = $this->users->find($userid);
			$user->password = $this->request->getPost('password');
			
			if (!$this->users->update($user->id, $user))
			{
			    return redirect()->back()->withInput()->with('errors', $this->users->errors());
			}

			session()->setFlashdata('success', 'Perubahan data berhasil');
			return redirect()->to('/admin/users');
        }
        else
        {
			$user =  $this->users->find($id);
			$data['user'] = $this->users->find($id);

			return view('admin/users/setpassword', $data);
        }		
	}

	public function importuser()
	{
		return view('admin/users/importuser');
	}
}
