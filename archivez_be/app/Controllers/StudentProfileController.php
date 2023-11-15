<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\StudentProfileModel;

class StudentProfileController extends ResourceController
{
    public function index()
    {
        //
    }
    public function getStudentProfileData()
    {
        $main = new StudentProfileModel();
        $data = $main->findAll();
        return $this->respond($data, 200);  
    }
}
