<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SectionModel;
use App\Models\DepartmentModel;


class SectionController extends BaseController
{
    public function index()
    {
        $section = new SectionModel();
        $allsec = $section->findAll();
        $data['section'] = $allsec;
        return view("section/index", $data);

        
    }
    
    public function store()
    {
        $section = new SectionModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'secdesc' => $this->request->getPost('secdesc'),
            'deartment_id' => $this->request->getPost('deartment_id'),
            // 'email' => $this->request->getPost('email')
        ];
        //ddd($data);
        $section->save($data);
        return redirect()->to(base_url('section'))->with('status', 'Department Added');
    }

    //create
    public function create(){
        helper(['array','form']);
        $department = new DepartmentModel();
        $alldept = $department->findAll();
        $alldept = key_value_for_dropdown($alldept);

       
        $data= [
            'dept'=>$alldept,
            // 'sec' => $allsec,
            // 'desig'=>$allsecti
        ];

        return view('section/create',$data);
    }

    //store the employee data
    public function save(){
        $sectionsave = new SectionModel();
        $data = [
            'name'=>$this->request->getPost('name'),
            'secdesc'=>$this->request->getPost('secdesc'),
            'department_id'=>$this->request->getPost('department_id'),
            
        ];
        //ddd($data);
        if($sectionsave->save($data))
        return redirect()->to(base_url('section'))->with('message','Section Added Successfully') ;
        else
        return redirect()->to(base_url('section/add'))->with('status','Error') ;
    }
    
    
}
