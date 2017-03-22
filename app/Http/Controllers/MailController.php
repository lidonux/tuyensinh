<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use View;

class MailController extends Controller
{
    //
    
    public function basic_email(){
        $data = array('name'=>"GodSent", "salt"=>"tuyensinhIU");

        Mail::send('mail', $data, function($message) {
            $message->to('lhduong@hcmiu.edu.vn', 'Dr. Duong')->subject('Testing the sending mail system');
            $message->from('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    
    public function html_email(){
        $data = array('name'=>"Duc Dep Trai", 'salt' =>"tuyensinhIU");
        Mail::send('mail', $data, function($message) {
            $message->to('ducnt@hcmiu.edu.vn', "Nguyen Tan Duc")->subject('Laravel HTML Testing Mail');
            $message->from('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
            $message->cc('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    
    
    public function receipt_email(){
	    $data = array('ten'=>"Ton Nu Quynh Hoa", "ngay-sinh"=>"13/06/1999");

        Mail::send('mail', $data, function($message) {
            $message->to('lhduong@hcmiu.edu.vn', 'Dr. Duong')->subject('Bien nhan dang ky thi DHQT');
            $message->from('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
        });
    	// return View::make('mail')->with('ten', 'Nguyen Tan Duc');
    	echo "Đã gửi Biên nhận cho $data['ten']";
    }

}
