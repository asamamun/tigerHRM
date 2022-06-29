<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LeaveController extends BaseController
{
    public function index()
    {
        return view('leave/index.php');
    }
}
