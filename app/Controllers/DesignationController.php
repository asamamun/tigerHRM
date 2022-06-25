<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesignationModel;

class DesignationController extends BaseController
{
    public function index()
    {
        $model = new DesignationModel();
        $alldesignation = $model->findAll();
        $data['designation'] = $alldesignation;
        return view("Designation/index", $data);
    }
}
