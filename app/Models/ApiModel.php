<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['id_siswa', 'uuid', 'nama_siswa', 'nisn'];

    public function getSiswaData()
    {
        return $this->select('tb_siswa.uuid, tb_siswa.nama_siswa')
            ->findAll();
    }
}
