<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use App\Models\KomentarModel;
use App\Models\PostinganModel;

class Dashboard extends BaseController
{

    protected $penggunaModel;
    protected $postinganModel;
    protected $komentarModel;

    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
        $this->postinganModel = new PostinganModel();
        $this->komentarModel = new KomentarModel();
    }

    public function index()
    {
        $data = [
            'countPengguna' => $this->penggunaModel->countPengguna()->getResultArray()[0],
            'countPost' => $this->postinganModel->countPostingan()->getResultArray()[0],
            'countComment' => $this->komentarModel->countKomentar()->getResultArray()[0]
        ];

        return view('admin/dashboard', $data);
    }
}
