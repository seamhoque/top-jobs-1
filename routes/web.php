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
<<<<<<< HEAD
Route::get('jobs', 'Jobs\JobController@postJob')->name('jobs.postJob');
=======

Route::get('jobs','Jobs\JobController@index')->name('jobs.index');

>>>>>>> 67a3a58cf9def1e5a2ec68d6df08c9f4b3f59450
// Ends

// Group C
Route::get('employers', 'EmployerController@index')->name('employers.index');
// End

// Group D
// End