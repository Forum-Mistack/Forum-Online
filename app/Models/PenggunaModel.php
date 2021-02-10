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
}
