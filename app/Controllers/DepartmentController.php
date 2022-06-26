<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;

class DepartmentController extends BaseController
{
    public function index()
    {        
        $department = new DepartmentModel();
        $alldepartment = $department->findAll();
        $data['department'] = $alldepartment;
        return view("department/index",$data);
       }
    public function create()
    {
        return view("department/create");
    }
public function store()
{
    $department = new DepartmentModel();
    $data = [
        'name' => $this->request->getPost('name'),
        'description' => $this->request->getPost('description'),
        'phone' => $this->request->getPost('phone'),
        'email' => $this->request->getPost('email')
    ];
    //ddd($data);
    $department->save($data);
    return redirect()->to(base_url('department'))->with('status','Department Added') ;
}
}

           

