<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

 
class AutocompleteController extends Controller {
 
 
    public function index() {
         
        helper(['form', 'url']);
        return view('search/autocomplete-search');
    }
    public function getTerm() {
 
        $data = [];
        $db      = \Config\Database::connect();
        $builder = $db->table('users');   
        $query = $builder->like('name', $this->request->getVar('term'))
                    ->select('name')
                    ->limit(10)->get();
        $data = $query->getResult();
 
        echo json_encode($data);
    }
  
}