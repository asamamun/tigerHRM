<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;


class GradeController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {

       
        $grade = new GradeModel();
        $allgrade = $grade->findAll();
        $data['emp_grade'] = $allgrade;

        return view('grade/index', $data);
        // return view('grade/index');
    }
    public function create()
    {
        return view("grade/create");
    }
    public function store()
    {
        $grade = new GradeModel();
        $data = [
            'gradeid' => $this->request->getPost('gradeid'),
            'gradename' => $this->request->getPost('gradename'),
            'basic' => $this->request->getPost('basic'),
            'houserent' => $this->request->getPost('houserent'),
            'medical' => $this->request->getPost('medical'),
            'other' => $this->request->getPost('other'),
        ];
        //ddd($data);
        $grade->save($data);
        return redirect()->to(base_url('grade'))->with('message', 'Grade Added successfully');
    }

    //edit grade

    public function edit($id)
    {
        $grade = new GradeModel();
        $data ['emp_grade'] = $grade->find($id);
        return view('grade/edit',$data);
    }
    //update grade
    public function update($id){
        $grade1 = new GradeModel();
        
        $data = [
            'gradeid' => $this->request->getPost('gradeid'),
            'gradename' => $this->request->getPost('gradename'),
            'basic' => $this->request->getPost('basic'),
            'houserent' => $this->request->getPost('houserent'),
            'medical' => $this->request->getPost('medical'),
            'other' => $this->request->getPost('other'),
        ];
        $grade1->update($id,$data);
        return redirect()->to(base_url('grade'))->with('message','Grade Added Successfully') ;
       
    }

    //delete grade
    public function delete($id = null)
    {
      $grade = new GradeModel();
      $grade->delete($id);
      return redirect()->to(base_url('grade'))->with('message','Grade Deleted Successfully') ;
    }
     

}
