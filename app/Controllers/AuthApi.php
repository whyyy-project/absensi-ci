<?php

namespace App\Controllers;

use App\Models\ApiKeyModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class AuthApi extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\ApiKeyModel';

    public function index()
    {
        // Tidak mengijinkan akses langsung ke endpoint ini
        return $this->failUnauthorized();
    }

    public function create()
    {
        // Tidak mengijinkan pembuatan API Key baru secara langsung
        return $this->failUnauthorized();
    }

    public function checkApiKey()
    {
        $request = service('request');
        $apiKey = $request->getHeaderLine('Api-Key');
        $model = new ApiKeyModel();
        $keyExists = $model->where('api_key', $apiKey)->first();

        $data = [
            'message' => "API Key kosong"
        ];

        if ($keyExists) {
            return $this->respond(['status' => 'success'], 200);
        } else {
            // return $this->failUnauthorized('Invalid API Key');
            return view('errors/html/error_404', $data);
        }
    }
}