<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


// agregamos el namespace del modelo para poder usar los metodos etc
use App\User;
use DB;

class Register extends Controller
{
    public function index()
    { 
    	return view('register');            	

    }

    public function add(Request $request)
    { 
    	// return "funciona";

    	DB::table('users')->insert([
    		"first_name"=>$request->input('first_name'),
    		"last_name"=>$request->input('last_name'),
    		"email"=>$request->input('email'),
    		"state"=>$request->input('state'),
    		"user"=>$request->input('user'),
    		// "password"=>$request->input('password')
    		"password"=> bcrypt($request->input('password'))

    	]);
    	
		// return view('login', compact('categories'));

		// el with es como un flashdata
		// return redirect()->route('login')->with('info','Usuario registrado correctamente');

		// back hace redirect a la ultima url
		// return back();

        // $request->session()->flash('reply_message','Your reply has been submitted and is waiting moderation');
		return redirect()->route('login');

    }     
}
