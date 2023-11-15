<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ResearchOutputModel;

class ResearchOutputController extends ResourceController
{
    public function index()
    {
        //
    }
    public function getResearchOutput(){
        $main = new ResearchOutputModel();
        $data = $main->findAll();
        return $this->respond($data, 200);  
    }
    public function save(){
        $json = $this->request->getJSON();
        $data = [
            'researchtitle' => $json->researchtitle,
            'submittedto' => $json->submittedto,
            'author' => $json->author,
            'idnumber' => $json->idnumber,
            'gradelevel' => $json->gradelevel,
            'section' => $json->section,
            'uploaddate' => $json->uploaddate,
            'abstract' => $json->abstract,
            'keywords' => $json->keywords,
            'filebody' => $json->filebody,
            'citation' => $json->citation,
            'status' => $json->status,
            'file' => $json->file,
            'commentedby' => $json->commentedby,
            'comment' => $json->comment,
        ];
        $main = new ResearchOutputModel();
        $r = $main->save($data);
         return $this->respond($r, 200);
    }
}
