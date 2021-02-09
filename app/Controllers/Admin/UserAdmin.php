<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserAdminModel;

class UserAdmin extends BaseController
{
	protected $userAdminModel;

	public function __construct()
	{
		$this->userAdminModel = new UserAdminModel();
	}

	public function index()
	{
		$data = [
			'admin' => $this->userAdminModel->getAdmin(),
			'IdAdmin' => $this->userAdminModel->checkAdminId()
		];

		return view('admin/userAdmin', $data);
	}

	// get data admin
	public function detail()
	{
		echo json_encode($this->userAdminModel->getAdmin($_POST['id']));
	}

	//get data id 
	public function getId()
	{
		echo json_encode($this->userAdminModel->checkAdminId($_POST['id']));
	}

	//Insert data admin to table admin
	public function save()
	{
		$this->userAdminModel->insert([
			'id_admin' => $this->request->getVar('id_admin'),
			'nama' => $this->request->getVar('nama'),
			'username' => $this->request->getVar('username'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
		]);

		return redirect()->to('/UserAdmin');
	}

	// Update data admin from table admin where id
	public function update($id)
	{
		$this->userAdminModel->update($id, [
			'nama' => $this->request->getVar('nama'),
			'username' => $this->request->getVar('username'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
		]);

		return redirect()->to('/UserAdmin');
	}

	// delete data admin from table where id
	public function delete($id)
	{
		$this->userAdminModel->delete($id);

		return redirect()->to('/UserAdmin');
	}
	//--------------------------------------------------------------------

}
