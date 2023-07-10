<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiKeyModel extends Model
{
    protected $table = 'data_api_keys';
    protected $primaryKey = 'id';
    protected $allowedFields = ['api', 'created_at'];
}
