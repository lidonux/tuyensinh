<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<title>Biên nhận đăng ký dự thi kỳ thi kiểm tra năng lực - Trường Đại học Quốc Tế - Tuyển sinh đại học năm 2017</title>	
	</head>	

	<header class="entry-header">
    	<h1 class="entry-title">(Mẫu)Biên nhận đăng ký dự thi Kỳ thi kiểm tra năng lực 05/2017</h1>
	</header>

	<body>
		Thân chào {{ $ten }},<br /><br />
		
		Trường Đại học Quốc Tế đã nhận được thông tin đăng ký dự thi Kỳ thi kiểm tra năng lực 05/2017 của bạn. Tuy nhiên, bạn cần cung cấp thêm các giấy tờ sau (nộp trực tiếp hoặc gửi qua bưu điện) để hoàn tất thủ tục đăng ký thi:<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 1. 3 ảnh 3x4 (ảnh chụp không quá 6 tháng);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 2. Bản photo học bạ (5 học kỳ bao gồm HKI, HKII của các năm học lớp 10,11 và HKI của năm học lớp 12);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 3. Bản sao công chứng thẻ học sinh (nếu thí sinh chưa tốt nghiệp THPT) hoặc giấy CMND (nếu thí sinh đã tốt nghiệp THPT).<br /><br />
		
		Bạn hãy vào trang <a href="http://tuyensinh.hcmiu.edu.vn/huong-dan-dang-ky/">"Kỳ thi kiểm tra năng lực" </a> để xem thêm thông tin.<br /> <br />
		
		Bạn đã đăng ký dự thi với các thông tin như sau:<br />
		
		<p><strong>I. THÔNG TIN THÍ SINH</strong><br />
		&nbsp;&nbsp;&nbsp;&nbsp;1. Họ và tên học sinh: {{ $ten }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;2. Ngày sinh: {{ $ngay_sinh}} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;3. Số CMND: {{ $so_cmnd }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;4. Giới tính: {{ $gioi_tinh }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;5. Dân tộc: {{ $dan_toc }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;6. Nơi học PTTH: <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 10: {{ $truong_lop_10 }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 11: {{ $truong_lop_11 }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lớp 12: {{ $truong_lop_12 }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;7. Đối tượng ưu tiên (nếu có): {{ $doi_tuong_uu_tien }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;8. Ưu tiên khu vực (nếu có): {{ $uu_tien_khu_vuc }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;9. Hộ khẩu thường trú: {{ $ho_khau_thuong_tru }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;10. Địa chỉ liên lạc: {{ $dia_chi_lien_lac }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;11. Số điện thoại: {{ $so_dien_thoai }} <br />
		&nbsp;&nbsp;&nbsp;&nbsp;12. Email: {{ $dia_chi_email }} <br />
	
		<p><strong>II. ĐĂNG KÝ DỰ THI</strong><br />
		&nbsp;&nbsp;&nbsp;&nbsp;1. Môn bắt buộc: Toán<br />
		&nbsp;&nbsp;&nbsp;&nbsp;2. Môn tự chọn: <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 1: {{ $mon1 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 2: {{ $mon3 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 3: {{ $mon2 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;3. Ngôn ngữ đề thi: {{ $ngon_ngu }} <br />

		<p><strong>III. NGÀNH ĐĂNG KÝ XÉT TUYỂN</strong><br />
		&nbsp;&nbsp;&nbsp;&nbsp;1. Ngành nguyện vọng 1: {{ $nganh1 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;2. Ngành nguyện vọng 2: {{ $nganh2 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;3. Ngành nguyện vọng 3: {{ $nganh3 }}<br />
		<br />
		<!--Mã xác thực an ninh: <?php echo Hash::make($ten . $ngay_sinh . $so_dien_thoai . "SATIU"); ?> --->
		Mã xác thực an ninh: {{ $ma_an_ninh}}<br />
	</body>
</html>