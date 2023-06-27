<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AbsensiModel;

class PagesController extends BaseController
{

    public function index()
    {
        return view('public/cover');
    }
    public function scan()
    {
        return view('public/scan');
    }
    public function hasilScan()
    {
        $dataAbsen = new AbsensiModel();
        $data = [
            'absensi' => $dataAbsen->getLastAbsensi()
        ];
        return view('public/hasilScan', $data);
    }
}
