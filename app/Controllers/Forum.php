<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use App\Models\PostinganModel;
use App\Models\KategoriModel;

class Forum extends BaseController
{
    protected $session;
    protected $penggunaModel;
    protected $kategoriModel;
    protected $postinganModel;

    public function __construct()
    {
        $this->session = session();
        $this->penggunaModel = new PenggunaModel();
        $this->kategoriModel = new KategoriModel();
        $this->postinganModel = new PostinganModel();
    }
    public function index()
    {
        return view('landing_page');
    }

    public function Profile($id)
    {
        $data = [
            'post' => $this->postinganModel->getPostinganJoinByIdPengguna($id)->getResultArray(0)
        ];

        return view('profile', $data);
    }

    public function Login()
    {
        return view('login');
    }

    public function SignUp()
    {
        return view('sign_up');
    }

    public function Forum()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $postingan = $this->postinganModel->cari($keyword);
        } else {
            $postingan = $this->postinganModel->getPostinganJoin();
        }

        $data = [
            'kategori' => $this->kategoriModel->getKategori(),
            'post' => $postingan->getResultArray(0)
        ];

        return view('forum', $data);
    }

    // Fungsi untuk menyimpan data pengguna yang mendaftar
    public function Register()
    {
        $this->penggunaModel->insert([
            'id_pengguna' => $this->penggunaModel->checkPenggunanId(),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/Login');
    }

    // Fungsi untuk masuk ke dalam akun yang telah didaftarkan dan mengecek apakah akun tersebut valid
    public function Auth()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->penggunaModel->Where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_pengguna' => $data['id_pengguna'],
                    'nama' => $data['nama'],
                    'email' => $data['email'],
                    'status_login' => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/');
            } else {
                $this->session->setFlashdata('message', 'Password Anda Salah!');
                return redirect()->to('/Login');
            }
        } else {
            $this->session->setFlashdata('message', 'Email Yang Anda Masukkan Belum Terdaftar!');
            return redirect()->to('/Login');
        }
    }

    // fungsi untuk mengakhiri sesi login dan menghapus data session yang telah dikirim pada saat login
    public function Logout()
    {
        $this->session->destroy();
        return redirect()->to('/Login');
    }
}
