<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesignationModel;

class DesignationController extends BaseController
{
    public function __construct()
    {        
        helper('form');
    }
    public function index()
    {
        if(!$this->checkauth()){ return redirect('login');}
        $designetion = new DesignetionModel();
        $data['customers'] = $designation->where('deleted',null)->findAll();
        return view('designation/index', $data);
    }
    //create
    public function create()
    {
        return view('designation/create');
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
            return redirect()->to(base_url('/designation'));
        } else {
            $session->setFlashdata('message', 'Designation creation failed');
            return redirect()->to(base_url('/designation/create'));
        }
    }
    //edit
    public function edit($id)
    {
        $designation = new DesignationModel();
        $data['designation'] = $designation->find($id);
        return view('designation/edit', $data);
    }
    //update
    public function update($id)
    {
        
        $session = \Config\Services::session();
        $designation = new DesignationModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'grade' => $this->request->getPost('grade'),
           
        ];
        if($designation->update($id, $data)) {
            $session->setFlashdata('message', 'designation updated successfully');
            return redirect()->to(base_url('/designation'));
        } else {
            $session->setFlashdata('message', 'designation update failed');
            return redirect()->to(base_url('/designation/edit/'.$id));
        }
    }
    //delete
    public function delete($id)
    {
        $session = \Config\Services::session();
        $designation = new DesignationrModel();
        $data = [
            'deleted' => date('Y-m-d H:i:s')
        ];
        if($designation->update($id, $data)) {
            $session->setFlashdata('message', 'Designation deleted successfully');
            return redirect()->to(base_url('/designation'));
        } else {
            $session->setFlashdata('message', 'designation delete failed');
            return redirect()->to(base_url('/desination'));
        }
    }
}

