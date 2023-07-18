<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RfidModel;

class PagesController extends BaseController
{
    public function __construct()
    {
        $this->dataAbsen = new RfidModel();
    }

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
        $data = [
            'absensi' => $this->dataAbsen->getLastAbsensi()
        ];
        return view('public/hasilScan', $data);
    }
}
