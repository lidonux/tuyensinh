<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Receipt Email">
    <meta name="author" content="International University">
    <link rel="icon" href="../../favicon.ico">

    <title>Biên nhận đăng ký dự thi kỳ thi kiểm tra năng lực</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
-->

    <div class="container">
	  
      <div class="starter-template">
	    
	    <h1 class="entry-title">Biên nhận đăng ký dự thi Kỳ thi kiểm tra năng lực 05/2017</h1>
		<br />
        <p class="lead">Thân chào {{ $ten }},<br /><br />
		
		Trường Đại học Quốc Tế đã nhận được thông tin đăng ký dự thi Kỳ thi kiểm tra năng lực 05/2017 của bạn. Tuy nhiên, bạn cần cung cấp thêm các giấy tờ sau (nộp trực tiếp hoặc gửi qua bưu điện) để hoàn tất thủ tục đăng ký thi:<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 1. 3 ảnh 3x4 (ảnh chụp không quá 6 tháng);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 2. Bản photo học bạ (5 học kỳ bao gồm HKI, HKII của các năm học lớp 10,11 và HKI của năm học lớp 12);<br />
		&nbsp;&nbsp;&nbsp;&nbsp; 3. Bản sao công chứng thẻ học sinh (nếu thí sinh chưa tốt nghiệp THPT) hoặc giấy CMND (nếu thí sinh đã tốt nghiệp THPT).<br /><br />
		
		Bạn hãy vào trang <a href="http://tuyensinh.hcmiu.edu.vn/huong-dan-dang-ky/">"Kỳ thi kiểm tra năng lực" </a> để xem thêm thông tin.<br /> <br />
		
		Bạn đã đăng ký dự thi với các thông tin như sau:<br />

        <div class="jumbotron">		
		<div class="page-header">
            <h3>I. Thông tin thí sinh</h1>
        </div>
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
		&nbsp;&nbsp;&nbsp;&nbsp;12. Email: {{ $dia_chi_email }}
		</div>

        <div class="jumbotron">		
        <strong>II. Đăng ký dự thi<strong>
		&nbsp;&nbsp;&nbsp;&nbsp;1. Môn bắt buộc: Toán<br />
		&nbsp;&nbsp;&nbsp;&nbsp;2. Môn tự chọn: <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 1: {{ $mon1 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 2: {{ $mon3 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn 3: {{ $mon2 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;3. Ngôn ngữ đề thi: {{ $ngon_ngu }}
		</div>
		
		<div class="jumbotron">		
		<div class="page-header">
            <h3>III. Ngành đăng ký xét tuyển</h1>
        </div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;1. Ngành nguyện vọng 1: {{ $nganh1 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;2. Ngành nguyện vọng 2: {{ $nganh2 }}<br />
		&nbsp;&nbsp;&nbsp;&nbsp;3. Ngành nguyện vọng 3: {{ $nganh3 }}
		</div>
		<!--Mã xác thực an ninh: <?php echo Hash::make($ten . $ngay_sinh . $so_dien_thoai . "SATIU"); ?> --->
		Mã xác thực an ninh: {{ $ma_an_ninh}}<br /></p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../public/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../public.assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
