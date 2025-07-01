<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfTestController extends Controller
{
    public function index()
    {
        return view('pdf.test');
    }

    public function generate()
    {
        $pdf = Pdf::loadView('pdf.test');
        return $pdf->download('test-pdf.pdf'); // atau ->stream() untuk melihat langsung
    }
}
