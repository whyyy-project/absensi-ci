<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_absensi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];


    public function getLastAbsensi()
    {
        return $this->db
            ->table('data_siswa', 'data_temporary_rfid')
            ->select('data_siswa.nama, data_kelas.kelas, data_absensi.tanggal, data_absensi.masuk, data_absensi.pulang, data_absensi.status_absen')
            ->from('data_absensi')
            ->join('data_siswa', 'data_siswa.id = data_absensi.id_siswa', 'left')
            ->join('data_temporary_rfid.rfid = data_siswa.uuid', 'left')
            ->orderBy('data_tempopary_rfid.id', 'DESC')
            ->limit(1);
    }
}
