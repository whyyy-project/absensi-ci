<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ApiModel;
use CodeIgniter\API\ResponseTrait;

class ApiSiswaController extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\ApiModel';
    protected $format = 'json';
    public function __construct()
    {
        $this->api = new ApiModel();
    }

    public function data_siswa($apiKey = null)
    {
        $data = [
            'message' => 'API Key Salah!'
        ];

        if ($this->validateApiKey($apiKey, 'getAllDataSiswa')) {
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
    public function addData()
    {
        // Mengambil data dari parameter GET
        $uuid = $this->request->getGet('uuid');

        // Validasi data
        if (empty($uuid)) {
            return $this->fail('UUID kosong');
        }
        // validasi apakah uuid ada
        $uuidExists = false;
        $dataUuid = $this->api->getSiswaData();
        foreach ($dataUuid as $d) {
            if ($d['uuid'] == $uuid) {
                $uuidExists = true;
            }
        }
        if (!$uuidExists) {
            return $this->fail('UUID tidak valid');
        }

        $data = [
            'uuid' => $uuid,
        ];

        return $this->respond($data, 201);
    }

    private function validateApiKey($apiKey, $type)
    {
        // Validasi API Key di sini
        // Misalnya, menggunakan model ApiKeyModel untuk memeriksa keberadaan API Key
        // Sesuaikan dengan logika validasi API Key yang Anda miliki
        $apiKeyModel = new \App\Models\ApiKeyModel();
        $keyExists = $apiKeyModel->where('api', $apiKey && 'type', $type);

        return $keyExists !== null;
    }
}
