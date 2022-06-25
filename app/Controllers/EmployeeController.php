<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class EmployeeController extends BaseController
{
    public function index()
    {
        return View('employee/index');
    }
}
