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
        return $this->select('tb_siswa.uuid, tb_siswa.nama_siswa, tb_siswa.nisn, tb_kelas.nama_kelas, kariyawan.nama_kariyawan')
            ->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas', 'left')
            ->join('kariyawan', 'tb_kelas.id_kariyawan = kariyawan.id_kariyawan', 'left')
            ->findAll();
    }
}