<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserAdminModel;

class Auth extends BaseController
{

    protected $session;
    protected $userAdminModel;

    public function __construct()
    {
        $this->session = session();
        $this->userAdminModel = new UserAdminModel();
    }


    public function index()
    {
        return view('admin/login');
    }

    public function Login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->userAdminModel->Where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_admin' => $data['id_admin'],
                    'nama' => $data['nama'],
                    'username' => $data['username'],
                    'status_login' => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/Dashboard');
            } else {
                $this->session->setFlashdata('message', 'Password Anda Salah!');
                return redirect()->to('/Admin');
            }
        } else {
            $this->session->setFlashdata('message', 'Username Yang Anda Masukkan Belum Terdaftar!');
            return redirect()->to('/Admin');
        }
    }

    public function Logout()
    {
        $this->session->destroy();
        return redirect()->to('/Admin');
    }
}
