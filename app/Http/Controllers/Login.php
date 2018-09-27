<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// para el auth
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    { 
    	return view('login');            	

    }

     public function initsession()
    { 
    	// return view('login');            	

    } 

    public function logout()
    { 
    	// return view('login');            	

    }      
}
