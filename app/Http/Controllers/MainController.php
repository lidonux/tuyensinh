<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Html\Html\ServiceProvider;

class MainController extends Controller
{
    //
    public function showLogin(){
    	return view('checklogin');
    }

    public function doLogout(){
    	Auth::logout(); 
    	return Redirect::to('checklogin');
    }

    public function doLogin(){
    	$rule = array(
    		'email'=>'required|email', // make sure the email is an actual email
    		'password'=>'required|alphaNum|min:8'
    	);

    	$validator = Validator::make(Input::all, $rules);
    	// if validator fails, redirect back to the form
    	if($validator->fail()){
    		return Redirect::to('checklogin')->withErrors($validator)
    									->withInput(Input::except('password'));
    		// send back inputs but not password
    	}
    	else {
    		$userdata = array(
    			'email' => Input::get('email');
    			'password' => Input::get('password')
    		);
    	

    		if (Auth::attempt($userdata)){
    			return '<h1>Congrats!!! You are in';
    		}
    		else{
    			return Redirect::to('checklogin');
    		}
    	}	

    }
}
