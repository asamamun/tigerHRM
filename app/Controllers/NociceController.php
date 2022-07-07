<?php

namespace App\Controllers;
use App\Models\NoticeModel;
use App\Models\SettingModel;

use App\Controllers\BaseController;

class NociceController extends BaseController
{
    public function index()
    {
        $notice = new NoticeModel();
        $allnotice = $notice->findAll();
        $data['notices'] = $allnotice;
        $company= new SettingModel();
        $_SESSION["comname"] = $company->find(1); 

        return view("tiger/notice/index", $data);
    }
}
