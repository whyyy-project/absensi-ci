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
    public function wali()
    {
        $data = [
            'title' => 'Guru | Wali Kelas'
        ];
        return view('guru/pages/wali_kelas', $data);
    }
}