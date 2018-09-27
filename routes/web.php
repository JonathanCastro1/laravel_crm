<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as'=>'login','uses'=>'login@index']);

// /login es lo que obtienes en la url, y 'as'=>'login' es para los route
Route::get('/login', ['as'=>'login','uses'=>'login@index']);

Route::post('initsession', ['as'=>'initsession','uses'=>'login@initsession']);





// Route::get('/login', 'Auth\AuthController@ShowLoginForm');

// as alias, es ideal para mucho codigo cuando toca modificarlo,uses significa usar el controlador@con metodo
Route::get('register', ['as'=>'register','uses'=>'register@index']);


Route::post('registeruser',['as'=>'registeruser','uses'=>'register@add']);

// version con alias
Route::get('users',['as'=>'users','uses'=>'users@index']);

// version normal
// Route::get('users','users@index');

Route::get('add', ['as'=>'add','uses'=>'users@add']);

Route::post('addusers',['as'=>'addusers','uses'=>'users@addusers']);


    // Route::resource('admin/users', 'AdminUsersController',['names'=>[


    //     'index'=>'admin.users.index',
    //     'create'=>'admin.users.create',
    //     'store'=>'admin.users.store',
    //     'edit'=>'admin.users.edit'






    // ]]);


