<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class userController extends Controller
{
    public function pdf()
    {
    	$pdf = PDF::loadView('pdf');
		return $pdf->download('student.pdf');
    }
}
