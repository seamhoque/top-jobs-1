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

Route::get('/', 'WelcomeController@index');

// Group A
Route::get('/packages', function(){
    return view('packages');
});

Route::get('/login', function(){
    return view('login_register/login');
});

// End

// Group B
// End

// Group C
Route::get('employers', 'EmployerController@index')->name('employers.index');
// End

// Group D
// End
