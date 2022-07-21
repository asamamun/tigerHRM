<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AttendanceModel;
use App\Models\EmployeeModel;

class AttendanceController extends BaseController
{
    public function index()
    {
        return view('tiger/attendance/index');
    }
    public function store(){
        $type = $this->request->getPost('type');
        $empid = $this->request->getPost('empid');
        $emp = New EmployeeModel();
        $empinfo = $emp->where('empid',$empid)->first();
        $att = new AttendanceModel();
        $t = date("Y-m-d H:i:s");
        $data = [
            'type'=>$type,
            'empid'=>$empid,
            'created_at'=>$t,            
        ];
        if($att->save($data)){
            $data['csrf_token'] = csrf_hash();
            $data['name'] = $empinfo['fname'] . " ".$empinfo['mname']." ".$empinfo['lname'];

        echo json_encode($data);
        }
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
