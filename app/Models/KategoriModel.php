<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['id_kategori', 'nama_kategori'];

    public function getKategori($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_kategori' => $id])->first();
    }

    public function checkKategoriId()
    {
        $this->selectMax('id_kategori', 'id');
        $query = $this->get();
        $serialNumber = substr($query->getResultArray()[0]['id'], 2, 3);
        $alphabet = "KT";

        if (!empty($this->findAll())) {
            $newId = $alphabet . sprintf("%03s", $serialNumber + 1);
        } else {
            $newId = "KT000";
        }
        return $newId;
    }
}
