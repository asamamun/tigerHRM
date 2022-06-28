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
        return redirect()->to(base_url('grade'))->with('status', 'Grade Added ');
    }
}
