<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AttendanceController extends BaseController
{
    public function index()
    {
        return view('attendance/index');
    }
}
