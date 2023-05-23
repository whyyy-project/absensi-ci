<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ApiModel;
use CodeIgniter\API\ResponseTrait;

class ApiSiswa extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\ApiModel';
    protected $format = 'json';

    public function data_siswa($apiKey = null)
    {
        $data = [
            'message' => 'API Key Salah!'
        ];


        if ($this->validateApiKey($apiKey)) {
            $model = new ApiModel();
            $siswaData = $model->getSiswaData();

            if (!empty($siswaData)) {
                return $this->respond($siswaData, 200);
            } else {
                return $this->respondNoContent();
            }
        } else {
            return view('errors/html/error_404', $data);

        }
    }

    private function validateApiKey($apiKey)
    {
        // Validasi API Key di sini
        // Misalnya, menggunakan model ApiKeyModel untuk memeriksa keberadaan API Key
        // Sesuaikan dengan logika validasi API Key yang Anda miliki
        $apiKeyModel = new \App\Models\ApiKeyModel();
        $keyExists = $apiKeyModel->where('api_key', $apiKey)->first();

        return $keyExists !== null;
    }
}