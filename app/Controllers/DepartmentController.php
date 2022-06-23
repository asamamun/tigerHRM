<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DepartmentController extends BaseController
{
    public function index()
    {
        return view("department/index");
    }
}
