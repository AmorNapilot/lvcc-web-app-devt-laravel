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

Route::get('/', 'MyController@showHomePage');
Route::get('/greet/{name}', 'MyController@greetUser');
Route::get('/registration-form', 'FormController@showRegistration');
Route::post('/process-registration', 'FormController@processRegistration');

// Route::get('/package/list', 'PaymentController@showPackages')->name('list_packages');
// Route::post('/package/summary', 'PaymentController@showPackageSummary')->name('package_summary');
// Route::get('/package/checkout', 'PaymentController@packageCheckout')->name('package_checkout');

Auth::routes();

Route::get('/home', 'HomeController@index');
