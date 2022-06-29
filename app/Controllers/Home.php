<?php

namespace App\Controllers;
use App\Models\ProjectModel;

class Home extends BaseController
{
    public function index()
    {
        if($this->checkauth()){
            $project = new ProjectModel();
        $allproject = $project->findAll();
        $data['project'] = $allproject;        
        return view("dashboard/dashboard", $data);
        }
        else{
            return redirect("login");
        }
     
    }

}
