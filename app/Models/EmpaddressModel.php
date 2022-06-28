<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpaddressModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'emp_address';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['p_address1', 'p_address2', 'p_village', 'p_post_name', 'p_post_code', 'p_upazila', 'p_dist', 'p_country', 'sameornot', 'c_address1', 'c_address2', 'c_village', 'c_post_name', 'c_post_code', 'c_upazila', 'c_dist', 'c_country'];

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
}
