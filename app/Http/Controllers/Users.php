<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


// agregamos el namespace del modelo para poder usar los metodos etc
use App\User;
use DB;

class Users extends Controller
{
    public function index()
    { 
    	// esta forma funciona igual que la de abajo ->get() y ->all()
       // $datos= DB::table('users')->get();
         $datos = User::all();
        return view('admin.users', compact('datos'));

         // return view('admin.users');             	

    }


     public function add()
    { 
       
        return view('admin.add_users');

                      

    }


     public function addusers(Request $request)
    {        

        DB::table('users')->insert([
            "first_name"=>$request->input('first_name'),
            "last_name"=>$request->input('last_name'),
            "email"=>$request->input('email'),
            "state"=>$request->input('state'),
            "user"=>$request->input('user'),
            // "password"=>$request->input('password')
            "password"=> bcrypt($request->input('password'))

        ]);        
       
        return redirect()->route('users');

    }   

    
}
