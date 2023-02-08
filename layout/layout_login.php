<?php
	//Gọi file connection.php ở bài trước
	require_once("../layout/db_connect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$db_user = $_POST["acc_admins"];
		$db_pass = $_POST["pass_admin"];
		if ($db_user == "" || $db_pass =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from acc_admin where acc_admins = '$db_user' and pass_admin = '$db_pass' ";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['acc_admins'] = $db_user ;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: ../layout/layout_main.php');
			}
		}
	}
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
    <section class="vh-100" style="background-color: black;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <h3 class="mb-5">Đăng Nhập</h3>
                <div class="form-outline mb-4">
                <input type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">Tên tài khoản</label>
                </div>
                <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Mật Khẩu</label>
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3">Nhớ mật khẩu</label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name ="btn_submit">Đăng Nhập</button>
                <hr class="my-4">
                <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Đăng nhập bằng Google</button>
                <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                type="submit"><i class="fab fa-facebook-f me-2"></i>Đằng nhập bằng Facebook</button>
             </div>
            </div>
         </div>
        </div>
    </div>
</section>

