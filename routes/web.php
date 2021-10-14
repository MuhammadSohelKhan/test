<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Exceptions\VeriableNotDefinedException;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', function ()
{
   	$pdf = PDF::loadView('pdf');
	return $pdf->stream('student.pdf');
});

Route::get('/test', function () {

 try{
    return view('home');
 }catch (\Exception $exception) {
 	   //return 'error';
        //report($exception);
        //return $exception->getMessage();
 	   throw new VeriableNotDefinedException();
 	   
    }
	
    return 'hello';
});
