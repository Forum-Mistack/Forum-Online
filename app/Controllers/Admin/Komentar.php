<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KomentarModel;

class Komentar extends BaseController
{
    protected $komentarModel;

    public function __construct()
    {
        $this->komentarModel = new KomentarModel();
    }

    public function index()
    {
        $data = [
            'komentar' => $this->komentarModel->getKomentar()
        ];

        return view('admin\komentar', $data);
    }

    public function detail()
    {
        echo json_encode($this->komentarModel->getKomentar($_POST['id']));
    }

    public function delete($id)
    {
        $this->komentarModel->delete($id);

        return redirect()->to('/Komentar');
    }
    //--------------------------------------------------------------------

}
