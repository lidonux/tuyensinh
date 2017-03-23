<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Hash;

class TestController extends Controller
{
    //
        public function receipt_page(){
    	$ten = "Tôn Nữ Quỳnh Hoa";
    	$ngay_sinh = '13/06/1999';
    	$so_dien_thoai = '0908038038';
    	
	    $data = array('ten'=>'Tôn Nữ Quỳnh Hoa', 
	    'ngay_sinh'=>'13/06/1999',
	    'so_cmnd' => '032544624',
	    'gioi_tinh'=>'Nữ',
	    'dan_toc'=>'Kinh',
	    'truong_lop_10'=>'Bùi Thị Xuân, Quận 3, Tp.HCM',
	    'truong_lop_11'=>'Lê Quí Đôn, Quận 3, Tp.HCM',
     	'truong_lop_12'=>'Lê Hồng Phong, Quận 3, Tp.HCM',
     	'doi_tuong_uu_tien'=>'1',
     	'uu_tien_khu_vuc'=>'3',
     	'ho_khau_thuong_tru'=>'KP 6 Linh Trung, Thủ Đức',
     	'dia_chi_lien_lac'=>'1 Lê Duẩn, Q.1, Tp.HCM',
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

        /*
        Mail::send('mail', $data, function($message) {
            $message->to('lhduong@hcmiu.edu.vn', 'Dr. Duong')->subject('(Mẫu) Biên nhận đăng ký thi kiểm tra năng lực');
            $message->from('lhduong@hcmiu.edu.vn', 'Le Hai Duong');
            //$message->cc('ducnt@hcmiu.edu.vn', 'Nguyen Tan Duc');
            //$message->cc('dathu@hcmiu.edu.vn', 'Dao Anh Thu');
        });
        */
    	$view = View::make('receipt');
    	$view->ten = 'Tôn Nữ Quỳnh Hoa';
    	$view->ngay_sinh = '13/06/1999';
	    $view->so_cmnd = '032544624';
	    $view->gioi_tinh = 'Nữ';
	    $view->dan_toc = 'Kinh';
	    $view->truong_lop_10 = 'Bùi Thị Xuân, Quận 3, Tp.HCM';
	    $view->truong_lop_11 = 'Lê Quí Đôn, Quận 3, Tp.HCM';
     	$view->truong_lop_12 = 'Lê Hồng Phong, Quận 3, Tp.HCM';
     	$view->doi_tuong_uu_tien = '1';
     	$view->uu_tien_khu_vuc = '3';
     	$view->ho_khau_thuong_tru = 'KP 6 Linh Trung, Thủ Đức';
     	$view->dia_chi_lien_lac = '1 Lê Duẩn, Q.1, Tp.HCM';
     	$view->so_dien_thoai = '0908038038';
     	$view->dia_chi_email = 'hoaquynh.tonnu@gmail.com';
     	$view->mon1 = 'Lý';
     	$view->mon2 = 'Hoá';
     	$view->mon3 = 'Anh văn';
     	$view->ngon_ngu = 'Đề thi bằng Tiếng Việt (trừ đề thi môn Tiếng Anh)';
     	$view->nganh1 = 'Công Nghệ Thông Tin (Chương trình trong nước) (Mã ngành D480201)';
     	$view->nganh2 = 'Quản Trị Kinh Doanh (Chương trình trong nước) (Mã ngành D340101)';
     	$view->nganh3 = 'Kỹ Thuật Điện Tử, Truyền Thông (Chương trình trong nước) (Mã ngành D520207)';
     	$view->ma_an_ninh = Hash::make($ten . $ngay_sinh . $so_dien_thoai . "SATIU");

		return $view;
//    	echo "Đã gửi Biên nhận cho $data[ten]";
    }
}
