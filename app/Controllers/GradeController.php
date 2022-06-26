<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GradeController extends BaseController
{
    public function index()
    {
        return view('grade/index');
    }
}
