<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function index(){
        return view('Admin.loginadmin');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pegawai(){
        
        return view('Pegawai.login');
    }
}