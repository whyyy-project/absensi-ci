<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GuruController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Guru | Dashboard'
        ];
        return view('guru/pages/dashboard', $data);
    }
    public function Siswa()
    {
        $data = [
            'title' => 'Guru | Data Siswa'
        ];
        return view('guru/pages/data_siswa', $data);
    }

    public function Rekap()
    {
        $data = [
            'title' => 'Guru | Rekap Absensi'
        ];
        return view('guru/pages/rekap', $data);
    }
}