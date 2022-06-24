<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DesignationController extends BaseController
{
    public function index()
    {
        return view("Designation/index");
    }
}
