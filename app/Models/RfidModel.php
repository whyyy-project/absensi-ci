<?php

namespace App\Models;

use CodeIgniter\Model;

class RfidModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_temporary_rfid';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['rfid', 'jenis_scan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getLastAbsensi()
    {
        $builder = $this->db->table('data_temporary_rfid');
        $builder->select('data_siswa.uuid, data_temporary_rfid.jenis_scan, data_siswa.nama, data_absensi.masuk, data_absensi.pulang, data_absensi.status_absen, data_absensi.keterangan, data_absensi.tanggal')
            ->join('data_siswa', 'data_siswa.uuid = data_temporary_rfid.uuid', 'left')
            ->join('data_absensi', 'data_absensi.id_siswa = data_siswa.id', 'left')
            // ->where('data_absensi.id')
            // $builder->select('data_absensi.tanggal, data_absensi.masuk, data_absensi.pulang, data_absensi.status_absen')
            // ->join('data_siswa', 'data_siswa.uuid = data_temporary_rfid.uuid')
            // // ->join('data_absensi', 'data_absensi.id_siswa = data_siswa.id')
            // // ->orderBy('data_absensi.id', 'desc')
            ->limit(1);

        $query = $builder->get();
        return $query->getResultArray();
    }
    public function addData($uuid)
    {
    }
}
