<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


use App\Models\PostinganModel;

class Postingan extends BaseController
{

    protected $postinganModel;

    public function __construct()
    {
        $this->postinganModel = new PostinganModel();
    }

    public function index()
    {
        $data = [
            'postingan' => $this->postinganModel->getPostingan()
        ];

        return view('admin\postingan', $data);
    }

    public function detail()
    {
        echo json_encode($this->postinganModel->getPostingan($_POST['id']));
    }
    //--------------------------------------------------------------------

    public function delete($id)
    {
        $this->postinganModel->delete($id);

        return redirect()->to('/Postingan');
    }
}
