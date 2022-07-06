<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\HolidayModel;
use App\Models\NoticeModel;
use App\Models\TodoModel;
use App\Models\EmployeeModel;
use App\Models\DepartmentModel;
use App\Models\LeaveModel;
use App\Models\SettingModel;
use CodeIgniter\Session\Session;
use Faker\Provider\ar_EG\Company;

class Home extends BaseController
{
    public $nedata;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        helper('form');
    }
    public function index()
    {
        if ($this->checkauth()) {

            $project = new ProjectModel();
            $allproject = $project->findAll();
            $data['project'] = $allproject;
            $_SESSION["allprojects"] = $project->countAllResults();


            // holiday
            $holiday = new HolidayModel();
            $allholiday = $holiday->findAll();
            $data['holidays'] = $allholiday;

            // notice
            $notice = new NoticeModel();
            $allnotice = $notice->findAll();
            $data['notices'] = $allnotice;
            // todolist
            $todolist = new TodoModel();
            $alltodo = $todolist->findAll();
            $data['todo'] = $alltodo;

            // EmployeeModel || count all employees rows
            $employee = new EmployeeModel();
            $_SESSION["allemployees"] = $employee->countAllResults();

            $company= new SettingModel();
            $_SESSION["comname"] = $company->find(1);
            
            // DepartmentModel
            $department = new DepartmentModel();
            $_SESSION["alldepartments"] = $department->countAllResults();
            // LeaveModel
            $empleave = new LeaveModel();
            $_SESSION["allleaves"] = $empleave->countAllResults();
            // ============================================
            return view("dashboard/dashboard", $data);
        } else {
            return redirect("login");
        }
    }
}
