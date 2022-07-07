<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;
use App\Models\EmployeeModel;

class AutocompleteSearch extends BaseController
{
    public function __construct()
	{   helper(['form', 'url']);
	
	}
    public function index() {
        return view('tiger/search/index');
    }
    
    public function ajaxSearch()
    {
       
        $data = [];
        $db = new EmployeeModel();
        $query = $db->like('name', $this->request->getVar('search'))
                    ->select('id, name as text')
                    ->limit(10)->get();
        $data = $query->getResult();
        
		echo json_encode($data);
        return view('tiger/search/index',$data);
    }
}