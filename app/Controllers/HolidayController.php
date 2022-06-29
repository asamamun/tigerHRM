<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HolidayModel;

class HolidayController extends BaseController
{
    public function index()
    {
        $holiday = new HolidayModel();
        $allholiday = $holiday->findAll();
        $data['holidays'] = $allholiday;        
        return view("holiday/index", $data);
    }
}
