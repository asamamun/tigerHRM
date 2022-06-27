<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use App\Models\DepartmentModel;
use App\Models\SectionModel;
use App\Models\DesignationModel;
use App\Models\EmployeeModel;
use App\Models\EmpaddressModel;
use App\Models\EmpeducationModel;

class EmployeeController extends BaseController
{
    public function __construct(){
        helper('form');
    }
    public function index()
    {
        $employee = new EmployeeModel();
        $allemployee = $employee->findAll();
        $data['employee'] = $allemployee;        
        return view("employee/index", $data);
    }
    //create
    public function create(){
        helper(['array','form']);
        $department = new DepartmentModel();
        $alldept = $department->findAll();
        $alldept = key_value_for_dropdown($alldept);
        //ddd($alldept);

        $section = new SectionModel();
        $allsec = $section->findAll();
        //ddd($allsec);
        $allsec = key_value_for_dropdown($allsec);
        $desig = new DesignationModel();
        $alldesig = $desig->findAll();
        $alldesig = key_value_for_dropdown($alldesig);
        $data= [
            'dept'=>$alldept,
            'sec' => $allsec,
            'desig'=>$alldesig
        ];

        return view('employee/create',$data);
    }
    //store the employee data
    public function store(){
        $emp = new EmployeeModel();
        $data = [
            'empid'=>$this->request->getPost('empid'),
            'fname'=>$this->request->getPost('fname'),
            'mname'=>$this->request->getPost('mname'),
            'lname'=>$this->request->getPost('lname'),
            'deptid'=>$this->request->getPost('deptid'),
            'secid'=>$this->request->getPost('secid'),
            'desigid'=>$this->request->getPost('desigid')
        ];
        //ddd($data);
        if($emp->save($data))
        return redirect()->to(base_url('employee'))->with('message','Employee Added') ;
        else
        return redirect()->to(base_url('employee/add'))->with('status','Error') ;
    }

    //Employee details
    public function details($id){
        $empinfo = new EmployeeModel();
        $emp = $empinfo->find($id);
        $data['emp'] = $emp;

        $empaddress = new EmpaddressModel();
        $address = $empaddress->where('id',$id)->get();
        $data['empaddress'] = $address->getResultArray();

        $empedu = new EmpeducationModel();
        $data['empeducation'] = $empedu->where('eid',$id)->getResultArray();
        //ddd($data['empaddress']);
        // ddd($emp); 
        return view ('employee/details',$data);
    }
}
