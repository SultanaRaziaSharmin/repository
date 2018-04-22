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
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/signin', function () {
    return view('login1');
});
Route::get('/register1', function () {

 return view('register1');
});
Route::get('/logout', function () {

	Auth::logout();
	return Redirect::to('');})->middleware("auth");

Route::post('/register1_action','Register1Controller@store');
Route::post('/login1_check','Register1Controller@login1');
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/appointment', 'AppointmentController@appointment');
Route::get('/profile', 'ProfileController@profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addprofile', 'ProfileController@addprofile');
Route::post('/addappointment', 'AppointmentController@addappointment');


Route::get('/doctor', 'DoctorController@doctor');
Route::get('/patient', 'PatientController@patient');
Route::get('/plogin', 'PatientloginController@plogin');
Route::get('/appointment_user', function () {

 return view('appointment_user');
});
Route::post('/appointment_user_action','Appointment_userController@appli');