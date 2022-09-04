<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $level = Auth::user()->level_id;
        if($level == "1"){
            return view ('admin.home');
        } else if($level == "2"){
            return view ('headMaster.home');
        } else if($level == "3"){
            return view ('guardianClass.home');
        } else if($level == "4"){
            return view ('employeeOperator.home');
        } else if($level == "5"){
            return view ('studentOperator.home');
        } else {
            return redirect()->to('logout');
        }
    }
}
