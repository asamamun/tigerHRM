<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        helper("form");
    }
    public function index()
    {
        return view("auth/login");
    }
    public function check(){
// validate request
$rules = [
    'email'		=> 'required|valid_email',
    'password' 	=> 'required|min_length[5]',
];

if (! $this->validate($rules)) {
    return redirect()->to('login')
        ->withInput()
        ->with('errors', $this->validator->getErrors());
}


        $email = $this->request->getPost('email');
        
        $pass = $this->request->getPost('password');
        $user = new UserModel();
        $info = $user->where("email",$email)->first();
        // var_dump($info);
        // exit;
        if($info){
            if(password_verify($pass,$info['password'])){

//set user info into session
$userd = [
    'username'  => $info['name'],
    'id'  => $info['id'],
    'role'     => $info['role'],
    'logged_in' => true,
];
$session = \Config\Services::session();
$session->set($userd);


                return redirect()->to(base_url("/dashboard"));
            }
            else{
                $session->setFlashdata('message', 'Auth Failed!!');
                return redirect()->to(base_url('/login')); 
            }              
        } 
        else{
            $session->setFlashdata('message', 'No user Found');
                    return redirect()->to(base_url('/login'));
        }      
//
    }

    //logout
    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
}
