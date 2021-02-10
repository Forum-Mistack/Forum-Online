<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{

    protected $penggunaModel;

    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
    }

    public function index()
    {
        $data = [
            'pengguna' => $this->penggunaModel->getPengguna()
        ];

        return view('admin\pengguna', $data);
    }

    public function detail()
    {
        echo json_encode($this->penggunaModel->getPengguna($_POST['id']));
    }

    public function delete($id)
    {
        $this->penggunaModel->delete($id);

        return redirect()->to('/Pengguna');
    }

    //--------------------------------------------------------------------

}
