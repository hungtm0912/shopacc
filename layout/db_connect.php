<?php
	session_start();
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_data = "web_acc";
	$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
	mysqli_set_charset($connect, 'utf8');
	$title = "Bán Acc Game - Shop Nick Giá Rẻ - Uy Tín Tại Việt Nam";
	$home_url = "http://localhost";
?>