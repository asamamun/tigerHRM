<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class DompdfController extends BaseController
{
    public function index(){
helper('url');
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('tiger/employee/cardpdf'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
        
    }
}