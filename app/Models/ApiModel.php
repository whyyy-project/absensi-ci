<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uuid', 'nama_siswa', 'nisn'];

    public function getSiswaData()
    {
        return $this->select('uuid')
            ->where('status', 'Aktif')
            ->findAll();
    }
}
