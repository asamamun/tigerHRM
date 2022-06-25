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
    $department = new Department();
    $data = [
        'dep_name' => $this->request->getPost('dep_name'),
        'dep_phon' => $this->request->getPost('dep_phon'),
        'email' => $this->request->getPost('email')
    ];
    $department->save($data);
    return redirect()->to(base_url('department'))->with('status','Department Added' ) ;
}


}

           

