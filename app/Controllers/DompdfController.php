<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class DompdfController extends BaseController
{
    public function index() 
	{
        return view('employee/cardpdf');
    }
    function htmlToPDF(){
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('employee/cardpdf'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
        return '$dompdf->output()';
        // $pdf = $dompdf->output();
        // file_put_contents("newfile.pdf", $pdf);

        
    }
}