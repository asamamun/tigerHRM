<?php

namespace App\Controllers;
use CodeIgniter\Session\Session;
use App\Controllers\BaseController;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use App\Models\AttendanceModel;
use App\Models\DepartmentModel;
use App\Models\SectionModel;
use App\Models\DesignationModel;
use App\Models\EmployeeModel;
use App\Models\EmpaddressModel;
use App\Models\EmpeducationModel;
use App\Models\SettingModel;
use App\Models\ExpModel;
use App\Models\LeaveModel;
use App\Models\EmployeeAddress;
use Dompdf\Dompdf;

class EmployeeController extends BaseController
{
    public function __construct(){
        if(!$this->checkauth()){
            return redirect()->to(base_url('login'))->with('message','You dont have permission') ;  
        }
        helper('form');
    }
    public function index()
    {
        $employee = new EmployeeModel();
        $allemployee = $employee->findAll();
        $data['employee'] = $allemployee;
        $_SESSION["allemployees"] = $employee->countAllResults();
        return view("tiger/employee/index", $data);
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

        return view('tiger/employee/create',$data);
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
        return redirect()->to(base_url('tiger/employee'))->with('message','Employee Added') ;
        else
        return redirect()->to(base_url('tiger/employee/add'))->with('status','Error') ;
    }
    //cards
    public function card($id){
        $company = new SettingModel();
        $data['company'] = $company->find(1);        
        $empinfo = new EmployeeModel();
        $emp = $empinfo->find($id);
        $data['employee'] = $emp;
        $empaddress = new EmployeeAddress();
        $empadrs = $empaddress->find($id);
        $data['empaddress'] = $empadrs;
        //ddd($emp);
        $deptid = $emp['deptid'];
        $d = new DepartmentModel();
        $data['deptname'] = $d->find($deptid)['name'];
        $desigid = $emp['desigid'];
        $des = new DesignationModel();
        $data['designame'] = $des->find($desigid)['name'];
        
        return view('tiger/employee/card',$data);
    }

    //Employee details
    public function details($id){
        $empinfo = new EmployeeModel();
        $emp = $empinfo->find($id);
        $data['emp'] = $emp;

        $empaddress = new EmpaddressModel();
        $address = $empaddress->where('id',$id)->get();
        $data['empaddress'] = $address->getResultArray()[0];
        // ddd($data['empaddress']);

        $empedu = new EmpeducationModel();
        $data['empeducation'] = $empedu->where('eid',$id)->find();
        if(!count($data['empeducation'])) {
            $data['empeducation'] = null;
        }
        // ddd($data['empeducation']);
        // ddd($emp); 
        

        $empexp = new ExpModel();
        $data['empexperience'] = $empexp->where('eid',$id)->find();
        if(!count($data['empexperience'])) {
            $data['empexperience'] = null;
        }
        //ddd($data['empexperience']);
       // ddd($emp); 

        $empleave = new LeaveModel();
        $data['leaves'] = $empleave->where('eid',$id)->findAll();
        if(!count($data['leaves'])) {
            $data['leaves'] = null;
        }
        // ddd($data['leaves']);
       // ddd($emp); 

    //    Attendance
        $attendance = new AttendanceModel();
        $data['attens'] = $attendance->find($id);
    
        // ddd($data['attens']);
       // ddd($emp); 

        $data['eid'] = $id;
        return view ('tiger/employee/details',$data);
    }
      //  save emp  personal information
    public function save($id){
        $empup = new EmployeeModel();
        $id = $this->request->getPost('id');
        $data = [        
        "fname" => $this->request->getPost('empid'),
        "fname" => $this->request->getPost('fname'),
        "mname" => $this->request->getPost('mname'),
        "lname" => $this->request->getPost('lname'),
        "dln" => $this->request->getPost('dln'),
        "dl_expdate" => $this->request->getPost('dl_expdate'),
        "gender" => $this->request->getPost('gender'),
        "dob" => $this->request->getPost('dob'),
        "maritalstatus" => $this->request->getPost('maritalstatus'),
        "phone" => $this->request->getPost('phone'),
        "homephone" => $this->request->getPost('homephone'),
        "email" => $this->request->getPost('email'),
        "blood" => $this->request->getPost('blood'),
        "blood" => $this->request->getPost('tin'),
        "nid" => $this->request->getPost('nid'),
        "mothersname" => $this->request->getPost('mothersname'),
        "mothersname" => $this->request->getPost('mothersname'),
        "bankname" => $this->request->getPost('bankname'),
        "bankaccno" => $this->request->getPost('bankaccno'),
        "bankacctype" => $this->request->getPost('bankacctype'),
        "plantid" => $this->request->getPost('plantid'),
        "deptid" => $this->request->getPost('deptid'),
        "secid" => $this->request->getPost('secid'),
        "deptid" => $this->request->getPost('desigid'),
        ];
        // var_dump($data);
        // exit;
        $empup->update($id, $data);
        return redirect()->back()->with('message', 'Setting updated!');
    }

    public function addeducation(){
/*         $emp = new EmployeeModel();
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
        return redirect()->to(base_url('employee/add'))->with('status','Error') ; */
        echo "add data";
    }
    // public function cardpdf(){

    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml(view('employee/cardpdf);
    //     $dompdf->setPaper('A4', 'landscape');
    //     $dompdf->render();
    //     $dompdf->stream();
        
    // }
}
