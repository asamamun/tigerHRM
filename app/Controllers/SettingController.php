<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;

class SettingController extends BaseController
{
    
    public function index()
    {
        helper('form');
        $setting = new SettingModel();
        $allsetting = $setting->find(1);
        // var_dump($allsetting);
        return view("tiger/setting/index", ['allsettings'=>$allsetting]);
    }
    //save
    public function save(){
        $setting = new SettingModel();
        $id = $this->request->getPost('id');
        $data = [        
        "companyname" => $this->request->getPost('companyname'),
        "companyaddress1" => $this->request->getPost('companyaddress1'),
        "companyaddress2" => $this->request->getPost('companyaddress2'),
        "tel" => $this->request->getPost('tel'),
        "email" => $this->request->getPost('email'),
        "web" => $this->request->getPost('web'),
        "tradeli" => $this->request->getPost('tradeli'),
        "ownername" => $this->request->getPost('ownername'),
        "tin" => $this->request->getPost('tin'),
        "establishmentdate" => $this->request->getPost('establishmentdate'),
        "alias" => $this->request->getPost('alias'),
        "companytype" => $this->request->getPost('companytype'),
        ];
        // var_dump($data);
        // exit;
        $setting->update($id, $data);
        return redirect()->back()->with('message', 'Setting updated!');
    }
}
