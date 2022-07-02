<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;
use CodeIgniter\Session\Session;

class DepartmentController extends BaseController
{
    public function index()
    {
        $department = new DepartmentModel();
        $alldepartment = $department->findAll();
        $data['department'] = $alldepartment;
        $_SESSION["alldepartments"] = $department->countAllResults();
        return view("department/index", $data);
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
        return redirect()->to(base_url('department'))->with('status', 'Department Added');
    }

        public function edit($id)
        {
            
            $department = new DepartmentModel();
            $data  ['department'] = $department->find($id);
            return view('department/edit', $data);
        }

        public function update($id){
            $department = new DepartmentModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email')
            ];
            $department->update($id,$data);
            return redirect()->to(base_url('department'))->with('message','department Added Successfully') ;
           
        }

        public function delete($id = null)
        {
          $department = new DepartmentModel();
          $department->delete($id);
          return redirect()->to(base_url('department'))->with('message','department Deleted Successfully') ;
        }
        
}
