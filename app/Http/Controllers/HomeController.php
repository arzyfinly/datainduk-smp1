<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if($role == "Admin"){
            alert()->success('Success','Login Success to Admin Panel!');
            return view ('admin.home');
        } else if($role == "Kepala Sekolah"){
            alert()->success('Success','Login Success to Head Master Panel!');
            return view ('headMaster.home');
        } else if($role == "Wali Kelas"){
            alert()->success('Success','Login Success to Guardian Class Panel!');
            return view ('guardianClass.home');
        } else if($role == "Kepegawaian"){
            alert()->success('Success','Login Success to Employee Operator Panel!');
            return view ('employeeOperator.home');
        } else if($role == "Kesiswaan"){
            alert()->success('Success','Login Success to Student Operator Panel!');
            return view ('studentOperator.home');
        } else {
            return redirect()->to('logout');
        }
    }
}
