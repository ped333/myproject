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

Route::middleware(['auth'])->group(function () {
    Route::get('/teacher', function () {
        return view('teacher/index');
    });
    
    Route::resource('/covid19','Covid19Controller');
    });
    
Route::get("/student" , function (){
	return view("student/index");
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('table');
});
Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
    Route::resource('covid19', 'Covid19Controller')->only(['index', 'show' ]);
    
    });
    //WRITE
    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('covid19', 'Covid19Controller')->except(['index', 'show' ]);
    });
    
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







Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('post', 'PostController');
Route::resource('book', 'BookController');
Route::resource('street', 'streetController');
Route::resource('street', 'streetController');
Route::resource('street', 'streetController');


Route::resource('book', 'BookController');
Route::resource('profiles', 'profilesController');
Route::resource('users', 'usersController');
Route::resource('vehicles', 'vehiclesController');