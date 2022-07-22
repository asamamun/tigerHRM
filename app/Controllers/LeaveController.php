<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\LeaveModel;
use App\Models\SettingModel;

class LeaveController extends BaseController
{
    public function index()
    {
        $empleave = new LeaveModel();
        $allleave = $empleave->findAll();
        $data['leave'] = $allleave; 
        $company= new SettingModel();
        $_SESSION["comname"] = $company->find(1); 
     
        //ddd($data['leave']);
       // ddd($emp); 

        return view('tiger/leave/index');
    }

        public function addleave()
        {
            return view('tiger/leave/addleave');
        }
    
}
