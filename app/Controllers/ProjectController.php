<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

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
        return view("project/index", $data);
    }
}
