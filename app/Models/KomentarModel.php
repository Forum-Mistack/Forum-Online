<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table      = 'komentar';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_komentar';
    protected $allowedFields = ['id_komentar', 'komentar', 'id_post', 'id_pengguna'];

    public function getKomentar($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_komentar' => $id])->first();
    }

    public function countKomentar()
    {
        return $this->selectCount('komentar')->get();
    }
}
