<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SectionModel;
use App\Models\DepartmentModel;


class SectionController extends BaseController
{


    public function __construct(){
        helper('form');
    }
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
        // ddd($data);
        if($section->save($data))
        return redirect()->to(base_url('section'))->with('message','Section Added Successfully') ;
        else
        return redirect()->to(base_url('section/add'))->with('status','Error') ;
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

    
//edit
        public function edit($id)
        {
            $section = new SectionModel();
            $data  ['section'] = $section->find($id);
            return view('section/edit', $data);
        }

//delete the Section data 
        public function delete($id = null)
        {
          $section = new SectionModel();
          $section->delete($id);
          return redirect()->to(base_url('section'))->with('message','Section Deleted Successfully') ;
        }
//update the Section data 
        public function update($id){
            $section = new SectionModel();
            
            $data = [
                'name' => $this->request->getPost('name'),
                'secdesc' => $this->request->getPost('secdesc'),
                'department_id' => $this->request->getPost('department_id'),
                
            ];
            $section->update($id,$data);
            return redirect()->to(base_url('section'))->with('message','section Added Successfully') ;
           
        }

    
}
