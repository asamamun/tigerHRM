<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;


class GradeController extends BaseController
{
    public function index()
    {

       
        $grade = new GradeModel();
        $allgrade = $grade->findAll();
        $data['emp_grade'] = $allgrade;

        return view('grade/index', $data);
        // return view('grade/index');
    }
}
