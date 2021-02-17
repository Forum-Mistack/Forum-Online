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

    public function getKomentarByIdPost($id)
    {
        $this->select('pengguna.nama, komentar.komentar, komentar.created_at');
        $this->join('post', 'komentar.id_post = post.id_post');
        $this->join('pengguna', 'pengguna.id_pengguna = komentar.id_pengguna');
        $query = $this->getWhere(['komentar.id_post' => $id]);

        return $query;
    }

    public function countKomentar($id = false)
    {
        if ($id == false) {
            return $this->selectCount('komentar')->get();
        } else {
            $this->select('pengguna.nama, komentar.komentar');
            $this->join('post', 'komentar.id_post = post.id_post');
            $this->join('pengguna', 'pengguna.id_pengguna = komentar.id_pengguna');

            return $this->selectCount('komentar.komentar')->getWhere(['komentar.id_post' => $id]);
        }
    }

    public function checkKomentarId()
    {
        $this->selectMax('id_komentar', 'id');
        $query = $this->get();
        $serialNumber = substr($query->getResultArray()[0]['id'], 2, 3);
        $alphabet = "KM";

        if (!empty($this->findAll())) {
            $newId = $alphabet . sprintf("%03s", $serialNumber + 1);
        } else {
            $newId = "KM000";
        }
        return $newId;
    }
}
