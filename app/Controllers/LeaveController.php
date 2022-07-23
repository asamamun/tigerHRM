<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\EmployeeModel;
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

        public function addleave($id)
        {
            $emp = new EmployeeModel();
            $empinfo = $emp->find($id);
            // ddd($empinfo);
            return view('tiger/leave/addleave',['emp'=>$empinfo]);
        }
        public function storeleave($id)
        {
            $data = [];
            $data['eid'] = $id;
            $data['leave_id'] = $this->request->getPost('leavetype');
            $data['leave_from'] = $this->request->getPost('startdate');
            $data['leave_to'] = $this->request->getPost('enddate');
            $data['leave_days'] = 1;
            $data['approved_by'] = 1;
            $data['approved'] = 1;
            $data['comments'] = $this->request->getPost("reason");
            // ddd($empinfo);
            $l = new LeaveModel();
            if($l->insert($data)) echo "added";
            else echo "error";
            
        }
    
}
