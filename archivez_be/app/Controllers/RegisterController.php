<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RegisterModel;

class RegisterController extends ResourceController
{
    public function index()
    {
        //
    }

    public function registerData()
    {
        $main = new RegisterModel();
        $data = $main->findAll();
        return $this->respond($data, 200);    
    }
}
