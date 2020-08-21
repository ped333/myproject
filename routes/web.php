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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/myprofile/create","MyProfileController@create");

Route::get( "/coronavirus" , "MyProfileController@coronavirus" );

Route::get("/teacher" , function (){
	return view("teacher/index");
});

Route::get("/student" , function (){
	return view("student/index");
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('table');
});
Route::get("/covid19/create", "Covid19Controller@create");
Route::get("/covid19/{id}/edit", "Covid19Controller@edit");
Route::get('/covid19', 'Covid19Controller@index');
Route::get('/covid19/{id}', 'Covid19Controller@show');
Route::post("/covid19", "Covid19Controller@store");
Route::patch("/covid19/{id}", "Covid19Controller@update");
Route::delete('/covid19/{id}', 'Covid19Controller@destroy');
/*
Route::get("/staff /create", "StaffController@create");
Route::get("/staff /{id}/edit", "StaffController@edit");
Route::get('/staff ', 'StaffController@index');
Route::get('/staff /{id}', 'StaffController@show');
Route::post("/staff ", "StaffController@store");
Route::patch("/staff /{id}", "StaffController@update");
Route::delete('/staff /{id}', 'StaffController@destroy');
*/
Route::resource('/staff' , "StaffController");






