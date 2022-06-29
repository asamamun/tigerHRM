<?php

namespace App\Controllers;
use App\Models\NoticeModel;

use App\Controllers\BaseController;

class NociceController extends BaseController
{
    public function index()
    {
        $notice = new NoticeModel();
        $allnotice = $notice->findAll();
        $data['notices'] = $allnotice;

        return view("notice/index", $data);
    }
}
