<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['id_pengguna', 'nama', 'email', 'password'];

    public function getPengguna($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_pengguna' => $id])->first();
    }

    public function countPengguna()
    {
        return $this->selectCount('nama')->get();
    }

    public function checkPenggunanId()
    {
        $this->selectMax('id_pengguna', 'id');
        $query = $this->get();

        $serialNumber = substr($query->getResultArray()[0]['id'], 2, 3);
        $alphabet = "PG";

        if (!empty($this->findAll())) {
            $newId = $alphabet . sprintf("%03s", $serialNumber + 1);
        } else {
            $newId = "PG000";
        }

        return $newId;
    }
}
