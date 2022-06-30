<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use App\Models\HolidayModel;
use App\Models\NoticeModel;
use App\Models\TodoModel;
use App\Models\UserModel;

class Home extends BaseController
{ 
    public function __construct()
    {        
        helper('form');
    }
    public function index()
    {
        if($this->checkauth()){
        $project = new ProjectModel();
        $allproject = $project->findAll();
        $data['project'] = $allproject;
        
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

        $usr = new UserModel();
        $allusr = $usr->findAll();
        $data['usrs'] = $allusr;

        return view("dashboard/dashboard", $data);

        }
        else{
            return redirect("login");
        }
     
    }

}
