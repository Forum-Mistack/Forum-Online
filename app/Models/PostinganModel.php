<?php

namespace App\Models;

use CodeIgniter\Model;

class PostinganModel extends Model
{
    protected $table      = 'post';
    protected $primaryKey = 'id_post';
    protected $useTimestamps = TRUE;
    protected $allowedFields = ['id_post', 'judul', 'pertanyaan', 'id_kategori', 'id_pengguna'];

    public function getPostingan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('id_post', $id)->first();
    }
}
