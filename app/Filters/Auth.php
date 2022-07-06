<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {

    // before function
    public function before(RequestInterface $request, $arguments = null) {
        if(!session()->get('logged_in')){
            return redirect()->to('/login'); 
        }
    }
     
    // after function
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}