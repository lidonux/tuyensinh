<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="http://tuyensinh.hcmiu.edu.vn/xmlrpc.php" />
		<title>Biên nhận đăng ký dự thi kỳ thi kiểm tra năng lực - Trường Đại học Quốc Tế - Tuyển sinh đại học năm 2017</title>	
	</head>	

	<header class="entry-header">
    	<h1 class="entry-title">Biên nhận đăng ký dự thi Kỳ thi kiểm tra năng lực - kỳ tháng 05/2017</h1>
	</header>

	<body>
		Thân chào {{ $ten }},<br />
		
		Chúng tôi đã nhận được thông tin đăng ký dự thi Kỳ thi kiểm tra năng lực 05/2017 của trường Đại học Quốc Tế. Tuy nhiên, bạn cần cung cấp cho chúng tôi các giấy tờ sau (nộp trực tiếp hoặc gửi qua bưu điện) để hoàn tất thủ tục đăng ký thi:<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 1. 3 ảnh 3x4 (ảnh chụp không quá 6 tháng);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 2. Bản photo học bạ (5 học kỳ bao gồm HKI, HKII của các năm học lớp 10,11 và HKI của năm học lớp 12);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 3. Bản sao công chứng thẻ học sinh (nếu thí sinh chưa tốt nghiệp THPT hoặc giấy CMND (nếu thí sinh đã tốt nghiệp THPT).<br />
		 
		<p><strong>I. THÔNG TIN THÍ SINH</strong><br />
		1. Họ và tên học sinh: {{ $ten }} <br />
		2. Ngày sinh: {{ $ngay_sinh}} <br />
		3. Số CMND: {{ $so_cmnd }} <br />
		4. Giới tính: {{ $gioi_tinh }} <br />
		5. Dân tộc: {{ $dan_toc }} <br />
		6. Nơi học PTTH: <br />
		&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 10: {{ $truong_lop_10 }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 11: {{ $truong_lop_11 }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 12: {{ $truong_lop_12 }} <br />
		7. Đối tượng ưu tiên (nếu có): {{ $doi_tuong_uu_tien }} <br />
		8. Ưu tiên khu vực (nếu có): {{ $uu_tien_khu_vuc }} <br />
		9. Hộ khẩu thường trú: {{ $ho_khau_thuong_tru }} <br />
		10. Địa chỉ liên lạc: {{ $dia_chi_lien_lac }} <br />
		11. Số điện thoại: {{ $so_dien_thoai }} <br />
		12. Email: {{ $dia_chi_email }} <br />
	
		<p><strong>II. ĐĂNG KÝ DỰ THI</strong><br />
		1. Môn bắt buộc: Toán<br />
		2. Môn tự chọn: <br />
		&nbsp;&nbsp;&nbsp;&nbsp;Môn 1: {{ $mon1 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Môn 2: {{ $mon3 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;Môn 3: {{ $mon2 }}<br />
		3. Ngôn ngữ đề thi: {{ $ngon_ngu }} <br />

		<p><strong>III. NGÀNH ĐĂNG KÝ XÉT TUYỂN</strong><br />
		1. Ngành nguyện vọng 1: {{ $nganh1 }}<br />
		2. Ngành nguyện vọng 2: {{ $nganh2 }}<br />
		3. Ngành nguyện vọng 3: {{ $nganh3 }}<br />
		<br />
		Mã xác thực an ninh: <?php echo Hash::make($ten . $ngay_sinh . $so_dien_thoai); ?>
	</body>
</html>