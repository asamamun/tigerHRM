<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AttendanceModel;

class AttendanceController extends BaseController
{
    public function index()
    {
        return view('tiger/attendance/index');
    }
    public function store(){
        $type = $this->request->getPost('type');
        $empid = $this->request->getPost('empid');
        $att = new AttendanceModel();
        $data = [
            'type'=>$type,
            'empid'=>$empid
        ];
        if($att->save($data))
        echo json_encode($data);
        else echo "0";

    }

    public function report(){
        return view('tiger/attendance/report');
    }

    public function addattendance(){
        return view('tiger/attendance/addattendance');
    }
    public function attendancelist(){
        return view('tiger/attendance/attendancelist');
    }
}

/* attendance menu
-attendance report(button: daily, monthly, individual)
daily - input(date), submit
monthly - month, year, submit
individual - empid , startdate, enddate, submit

between and sql */
