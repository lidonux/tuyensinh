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

Route::get('/', function(){
    return 'Hello in Tuyen sinh';
}); 
Route::get('/foo', function(){
    return 'Hello foo';
}); 

Route::get('/basicmail', MailController@receipt_email);



