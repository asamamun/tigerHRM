<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\SettingModel;

class ProjectController extends BaseController
{
    public function __construct(){
        helper('form');
    }
    public function index()
    {
        $project = new ProjectModel();
        $allproject = $project->findAll();
        $data['project'] = $allproject;
        $company= new SettingModel();
        $_SESSION["comname"] = $company->find(1);     
        return view("project/index", $data);
    }
}
