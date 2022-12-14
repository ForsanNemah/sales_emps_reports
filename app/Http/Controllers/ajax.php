<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajax extends Controller
{
    //
    public function index( Request $request){

//echo $request->input('x');

$request->session()->put('x', $request->input('x'));
$request->session()->put('y', $request->input('y'));

 //echo $request->session()->get('x');
 //echo $request->session()->get('y');

        
    }
}
