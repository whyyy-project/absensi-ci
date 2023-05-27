<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Dashboard'
        ];
        return view('admin/pages/admin_dashboard', $data);
    }
    public function kelas()
    {
        $data = [
            'title' => 'Admin | Data Kelas'
        ];
        return view('admin/pages/data_kelas', $data);
    }
    public function guru()
    {
        $data = [
            'title' => 'Admin | Data Guru'
        ];
        return view('admin/pages/data_guru', $data);
    }
    public function siswa()
    {
        $data = [
            'title' => 'Admin | Data Siswa'
        ];
        return view('admin/pages/data_siswa', $data);
    }
}