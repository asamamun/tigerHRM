<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsController extends BaseController
{
    public function index()
    {
        return view('accounts/index');
    }
}
