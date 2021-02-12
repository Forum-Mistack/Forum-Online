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

    public function getPostinganJoin($id = false)
    {
        $this->select('post.id_post, post.judul, post.pertanyaan, pengguna.nama, kategori.nama_kategori, post.created_at');
        $this->join('pengguna', 'post.id_pengguna = pengguna.id_pengguna');
        $this->join('kategori', 'post.id_kategori = kategori.id_kategori');

        if ($id == false) {
            $query = $this->get();
        } else {
            $query = $this->getWhere(['post.id_post' => $id]);
        }

        return $query;
    }

    public function cari($keyword)
    {
        $this->select('post.id_post, post.judul, post.pertanyaan, pengguna.nama, kategori.nama_kategori, post.created_at');
        $this->join('pengguna', 'post.id_pengguna = pengguna.id_pengguna');
        $this->join('kategori', 'post.id_kategori = kategori.id_kategori');

        return $this->like('post.judul', $keyword)->get();
    }

    public function getPostinganJoinByIdPengguna($id)
    {
        $this->select('post.id_post, post.judul, post.pertanyaan, pengguna.nama, kategori.nama_kategori, post.created_at');
        $this->join('pengguna', 'post.id_pengguna = pengguna.id_pengguna');
        $this->join('kategori', 'post.id_kategori = kategori.id_kategori');

        return $this->getWhere(['post.id_pengguna' => $id]);
    }

    public function countPostingan()
    {
        return $this->selectCount('pertanyaan')->get();
    }

    public function checkPostId()
    {
        $this->selectMax('id_post', 'id');
        $query = $this->get();

        $serialNumber = substr($query->getResultArray()[0]['id'], 2, 3);
        $alphabet = "PS";

        if (!empty($this->findAll())) {
            $newId = $alphabet . sprintf("%03s", $serialNumber + 1);
        } else {
            $newId = "PS000";
        }

        return $newId;
    }
}
