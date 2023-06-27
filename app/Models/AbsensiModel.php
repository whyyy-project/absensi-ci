<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_absen_siswa';
    protected $primaryKey       = 'id_absen_siswa';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];


    public function getLastAbsensi()
    {
        return $this->orderBy('id_absensi_siswa', 'desc')
            ->limit(1);
    }
}
