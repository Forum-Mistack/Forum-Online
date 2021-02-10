<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'kategori' => $this->kategoriModel->getKategori(),
            'IdKategori' => $this->kategoriModel->checkKategoriId()
        ];

        return view('admin\kategori', $data);
    }

    // get data kategori
    public function detail()
    {
        echo json_encode($this->kategoriModel->getKategori($_POST['id']));
    }

    public function getId()
    {
        echo json_encode($this->kategoriModel->checkKategoriId($_POST['id']));
    }

    public function save()
    {
        $this->kategoriModel->insert([
            'id_kategori' => $this->request->getVar('id_kategori'),
            'nama_kategori' => $this->request->getVar('kategori')
        ]);

        return redirect()->to('/Kategori');
    }

    public function update($id)
    {
        $this->kategoriModel->update($id, [
            'nama_kategori' => $this->request->getVar('kategori')
        ]);

        return redirect()->to('/Kategori');
    }


    public function delete($id)
    {
        $this->kategoriModel->delete($id);

        return redirect()->to('/Kategori');
    }


    //--------------------------------------------------------------------

}
