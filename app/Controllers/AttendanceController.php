<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AttendanceModel;
use App\Models\EmployeeModel;

class AttendanceController extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

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
    
    public function attendancelistdata(){
        $att = new AttendanceModel();
        $data = $att->get()->getResultArray();
        echo json_encode($data);
    }
public function attendanceReport(){
    $db      = \Config\Database::connect();
    $filter = $this->request->getGet('filter');
    // echo $filter . " <br>";
    // ddd($filter); exit;
    $userbuilder = $db->table('attendance');

    if ($filter == "monthly") {
        //attendance
        $today = date("Y-m-d");
        $last30date = date("Y-m-d", strtotime("$today -30 days"));
        $userbuilder->select("id");
        $userbuilder->where('created_at >', $last30date . " 00:00:00");
        $userbuilder->where('created_at <', $today . " 23:59:59");
        $attr = $userbuilder->get()->getResultArray();
        $data['totalusers'] = count($attr);
      

    }

}



}





/* attendance menu
-attendance report(button: daily, monthly, individual)
daily - input(date), submit
monthly - month, year, submit
individual - empid , startdate, enddate, submit

between and sql */
