<?php

namespace App\Models;

use CodeIgniter\Model;

class ResearchOutputModel extends Model
{
    protected $table            = 'researchoutputs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['researchtitle', 'submittedto', 'subject', 'author', 'idnumber', 'gradelevel', 'section', 'uploaddate', 'abstract', 'keywords', 'filebody', 'citation', 'status', 'file', 'commentedby', 'comment'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveData($data)
    {
        $fileData = file_get_contents($data['file']);
        $data['file'] = $fileData;

        return $this->insert($data);
    }
}
