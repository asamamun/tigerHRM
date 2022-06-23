<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if($this->checkauth()){
            return view('dashboard/dashboard');
        }
        else{
            return redirect("login");
        }
        //
    }


}
