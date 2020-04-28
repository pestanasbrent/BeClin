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

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('medicine/landing', 'InventoryController@landing')->name('medicine_landing');
Route::get('medicine/homepage', 'InventoryController@homepage');
Route::get('medicine/services', 'InventoryController@services');
Route::get('medicine/aboutus', 'InventoryController@aboutus');

Route::get('admin/landing', 'InventoryController@adminlanding');
Route::get('admin/homepage', 'InventoryController@adminhomepage');
Route::get('admin/services', 'InventoryController@adminservices');
Route::get('admin/aboutus', 'InventoryController@adminaboutus');


Route::get('users/register', 'UserController@create')->name('users_reg');
Route::get('users/clinic', 'UserController@ClinicCreate');
Route::get('users/cliniclogin', 'UserController@ClinicLogin')->name('users_cliniclogin');
Route::post('users/store', 'UserController@store')->name('users_store');
Route::post('users/clinicStore', 'UserController@clinicStore')->name('users_clinicStore');


Route::get('users/login', 'SessionController@create')->name('users_login');
Route::post('users/login', 'SessionController@store')->name('session_store');
Route::post('users/adminstore', 'SessionController@adminstore')->name('session_adminstore');


Route::get('/inventory/index', 'InventoryController@index')->name('inventory_list');
Route::get('/inventory/create', 'InventoryController@create')->name('inventory_add');
Route::post('/inventory/store', 'InventoryController@store')->name('inventory_store');
Route::get('/inventory/edit/{id}', 'InventoryController@edit')->name('inventory_edit');
Route::post('/inventory/edit/{id}', 'InventoryController@update')->name('inventory_update');
Route::delete('/inventory/delete/{id}', 'InventoryController@delete')->name('inventory_delete');

Route::get('student/landing', 'UserController@student')->name('users_student');
Route::get('student/medcert', 'UserController@medcert')->name('student_medcert');
Route::get('student/send', 'UserController@send')->name('student_send');
Route::get('student/request', 'UserController@request')->name('student_request');


Route::get('student/homepage', 'InventoryController@studhomepage')->name('student_medcert');
Route::get('student/services', 'InventoryController@studservices')->name('student_send');
Route::get('student/aboutus', 'InventoryController@studaboutus')->name('student_request');


Route::get('/log/index', 'LogController@index')->name('log_list');
Route::get('/log/create', 'LogController@create')->name('log_add');
Route::post('/log/create', 'LogController@store')->name('log_store');
Route::get('/log/edit/{id}', 'LogController@edit')->name('log_edit');
Route::post('/log/edit/{id}', 'LogController@update')->name('log_update');
Route::delete('/log/delete/{code}', 'LogController@delete')->name('log_delete');


Route::get('/contact/create', 'ContactFormController@create')->name('contact_create');
Route::post('/contact/store', 'ContactFormController@store')->name('contact_store');
Route::get('/emails/emailresponse', 'ContactFormController@response')->name('emails_response');