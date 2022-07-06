<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HolidayModel;
use App\Models\SettingModel;

class HolidayController extends BaseController
{
    public function index()
    {
        $holiday = new HolidayModel();
        $allholiday = $holiday->findAll();
        $data['holidays'] = $allholiday;        
        $company= new SettingModel();
        $_SESSION["comname"] = $company->find(1);       
        return view("holiday/index", $data);
    }
}
