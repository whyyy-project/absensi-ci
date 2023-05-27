<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        return view('public/hasilScan');
    }
}