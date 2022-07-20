<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesignationModel;
use App\Models\GradeModel;

class DesignationController extends BaseController
{
    public function __construct()
    {        
        helper('form');
    }
    public function index()
    {
       $dataload = new DesignationModel();
       $alldata = $dataload->findAll();
       $data['designation'] = $alldata;
       return view("tiger/designation/index", $data);
    }
  

    //create
    public function create()
    {
$grades = new GradeModel();
$data['allgrades'] = $grades->findAll();
$dropgrade = [];
        $dropgrade[-1] = 'Select';
            foreach ($data['allgrades'] as $grade) {
                $dropgrade[$grade['id']] = $grade['gradename']."-".$grade['gradeid'];
                }
         $data['grades']=$dropgrade;       
        return view('tiger/designation/create',$data);
    }
    //store
    public function store()
    {
        $session = \Config\Services::session();
        $designation = new DesignationModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'desigdesc' => $this->request->getPost('desigdesc'),
            'grade' => $this->request->getPost('grade'),
            
        ];
        if($designation->insert($data)) {
            $session->setFlashdata('message', 'Designation created successfully');
            return redirect()->to(base_url('/tiger/designation'));
        } else {
            $session->setFlashdata('message', 'Designation creation failed');
            return redirect()->to(base_url('/tiger/designation/create'));
        }
    }
    //edit
    public function edit($id)
    {
        $designation = new DesignationModel();
        $data['designation'] = $designation->find($id);
        return view('tiger/designation/edit', $data);
    }
    //update
    public function update($id)
    {
        
        $session = \Config\Services::session();
        $designation = new DesignationModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'desigdesc' => $this->request->getPost('desigdesc'),
            'grade' => $this->request->getPost('grade'),
           
        ];
        if($designation->update($id, $data)) {
            $session->setFlashdata('message', 'designation updated successfully');
            return redirect()->to(base_url('/tiger/designation'));
        } else {
            $session->setFlashdata('message', 'designation update failed');
            return redirect()->to(base_url('/tiger/designation/edit/'.$id));
        }
    }
    //delete
    public function delete($id = null)
    {
        $designation = new DesignationModel();
          $designation->delete($id);
          return redirect()->to(base_url('tiger/designation'))->with('message','Designation Deleted Successfully') ;
        // $session = \Config\Services::session();
        // $designation = new DesignationModel();
        // $data = [
        //     'deleted' => date('Y-m-d H:i:s')
        // ];
        // if($designation->update($id, $data)) {
        //     $session->setFlashdata('message', 'Designation deleted successfully');
        //     return redirect()->to(base_url('/designation'));
        // } else {
        //     $session->setFlashdata('message', 'designation delete failed');
        //     return redirect()->to(base_url('/desination'));
        // }
    }
}

