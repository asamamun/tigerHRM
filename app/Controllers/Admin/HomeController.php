<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view("admin/dashboard");
    }
    public function d()
    {
        echo "d called";
    }
}
