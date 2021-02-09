<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['id_admin', 'nama', 'username', 'password'];

    public function getAdmin($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_admin' => $id])->first();
    }

    public function checkAdminId()
    {
        $this->selectMax('id_admin', 'id');
        $query = $this->get();

        $serialNumber = substr($query->getResultArray()[0]['id'], 2, 3);
        $alphabet = "AD";

        if (!empty($this->findAll())) {
            $newId = $alphabet . sprintf("%03s", $serialNumber + 1);
        } else {
            $newId = "AD000";
        }

        return $newId;
    }
}
