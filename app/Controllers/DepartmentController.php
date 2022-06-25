<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;

class DepartmentController extends BaseController
{
    public function index()
    {
        
        $model = new DepartmentModel();
        $alldepartments = $model->findAll();
        $data['departments'] = $alldepartments;
        return view("department/index",$data);
    }
}
