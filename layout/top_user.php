<?php 
    require '../layout/db_connect.php';
    require '../layout/layout_main.php';
    
?>


<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head> 
            
            <div class="list-group">
					<div class="list-group-item active">Lịch Sử Mua Tài Khoản</div>
					<?php
					$sql = $connect->query("SELECT * from `top_user` ORDER BY `id` DESC LIMIT 4");
					if (mysqli_num_rows($sql)>0) {
						while ($ae = mysqli_fetch_array($sql)) {
							echo '<div class="list-group-item list-group-item-success"><i><strong>'.$ae["fullname"].'</strong> Mua Acc '.$ae["loai"].' <strong>'.$ae["idacc"].' - '.number_format($ae["gia"]).'đ</strong></i></div>';
						}
					}else {
						echo '<div class="list-group-item list-group-item-danger">Chưa Có Giao Dịch</div>';
					}
					?>
					<div class="list-group-item list-group-item-success">
					<button type="button" data-toggle="modal" data-target="#loginModal" class="btn btn-danger">Nạp Thẻ Ngay</button>
					</div>
			</div>