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

Route::get('/', function () {
   return 'Hello World';
});


Route::get('foo/bar', function () {
   return 'Hello World';
});

Route::put('foo/bar', function () {
   //
});

Route::delete('foo/bar', function () {
   //
});

Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Virat'){
   echo "Name: ".$name;
});
Route::get('role', [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);
Route::get('sendbasicemail', 'MailController@basic_email');
Route::get('sendhtmlemail', 'MailController@html_email');

Route::get('mail', 'MailController@receipt_email');

Route::get('/mail_receipt', 'TestController@receipt_page');
