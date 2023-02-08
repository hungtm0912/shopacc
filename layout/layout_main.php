<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../CSS/style.css">

	<title>Website Bai Tap</title>
</head>
	<?php 
	require '../layout/db_connect.php';
	?>
<body>
	<div class = "layout">
		<div class = "header">
			<div class = "header-content-menu">
				<a href ="../layout/layout_main.php"><img src="../img/logo_header.png"></a>
				<div class="navbar">
					<a href="../layout/layout_main.php">Trang Chủ</a>
					<div class="subnav">
						<button class="subnavbtn">Giao Dịch Gần Đây <i class="fa fa-caret-down"></i></button>
						<div class="subnav-content">
						<a href="#company">Thời hạn tài khoản</a>
						<a href="#team">Team</a>
						<a href="#careers">Careers</a>
						</div>
					</div> 
					<div class="subnav">
						<button class="subnavbtn">Dịch Vu <i class="fa fa-caret-down"></i></button>
						<div class="subnav-content">
						<a href="#bring">Thuê Tài Khoản</a>
						<a href="#deliver">Mua Tài Khoản</a>
						<a href="#package">Bán Tài Khoản</a>
						</div>
					</div> 
					<div class="subnav">
						<button class="subnavbtn">Thông tin Game <i class="fa fa-caret-down"></i></button>
						<div class="subnav-content">
						<a href="https://www.leagueoflegends.com/vi-vn/">Liên Minh Huyền Thoại</a>
						<a href="https://valorant.zing.vn/vi-vn/agents/">Varolant</a>
						<a href="https://lienquan.garena.vn/trang-bi">Liên Quân Mobile</a>
						</div>
					</div>
					<a href="#contact">Liên Hệ</a>
					<a href="../layout/layout_login.php">Đăng Nhập</a>
				</div>
			</div>
		</div>
		<div class ="container">
			<div class="conatiner-ls-mua">
			</div>
		</div>
		<div class="layout">
		</div>
	</div>
</body>
</html>