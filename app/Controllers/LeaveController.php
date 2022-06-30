<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\LeaveModel;

class LeaveController extends BaseController
{
    public function index()
    {
        $empleave = new LeaveModel();
        $allleave = $empleave->findAll();
        $data['leave'] = $allleave;        
     
        //ddd($data['leave']);
       // ddd($emp); 

        return view('leave/index');
    }
}
