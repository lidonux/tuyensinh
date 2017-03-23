<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use View;
use Hash;

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
	    $data = array('ten'=>'Tôn Nữ Quỳnh Hoa', 
	    'ngay_sinh'=>'13/06/1999',
	    'so_cmnd' => '032544624',
	    'gioi_tinh'=>'Nữ',
	    'dan_toc'=>'Kinh',
	    'truong_lop_10'=>'Bùi Thị Xuân',
	    'truong_lop_11'=>'Lê Quí Đôn',
     	'truong_lop_12'=>'Lê Hồng Phong',
     	'doi_tuong_uu_tien'=>'1',
     	'uu_tien_khu_vuc'=>'3',
     	'ho_khau_thuong_tru'=>'KP 6 Linh Trung, Thủ Đức',
     	'dia_chi_lien_lac'=>'1 Lê Duẩn, Q.1',
     	'so_dien_thoai'=>'0908038038',
     	'dia_chi_email'=>'hoaquynh.tonnu@gmail.com',
     	'mon1'=>'Lý',
     	'mon2'=>'Hoá',
     	'mon3'=>'Anh văn',
     	'ngon_ngu'=>'Đề thi bằng Tiếng Việt (trừ đề thi môn Tiếng Anh)',
     	'nganh1'=>'Công Nghệ Thông Tin (Chương trình trong nước) (Mã ngành D480201)',
     	'nganh2'=>'Quản Trị Kinh Doanh (Chương trình trong nước) (Mã ngành D340101)',
     	'nganh3'=>'Kỹ Thuật Điện Tử, Truyền Thông (Chương trình trong nước) (Mã ngành D520207)',
     	'ma_an_ninh'=>Hash::make($ten . $ngay_sinh . $so_dien_thoai . "SATIU")
	    );

        Mail::send('mail', $data, function($message) {
            $message->to('lhduong@hcmiu.edu.vn', 'Dr. Duong')->subject('(Mẫu) Biên nhận đăng ký thi kiểm tra năng lực');
            $message->from('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
            $mesage->cc('ducnt@hcmiu.edu.vn', 'Nguyen Tan Duc');
            $message->cc('dathu@hcmiu.edu.vn', 'Dao Anh Thu');
        });
    	// return View::make('mail')->with('ten', 'Nguyen Tan Duc');
    	echo "Đã gửi Biên nhận cho $data[ten]";
    }

}
