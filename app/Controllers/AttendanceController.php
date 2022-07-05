<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AttendanceModel;

class AttendanceController extends BaseController
{
    public function index()
    {
        return view('attendance/index');
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
}
