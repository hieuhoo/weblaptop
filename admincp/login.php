<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count > 0){
			$_SESSION['dangnhap'] =$taikhoan;
			header("Location: index.php");
		}else{
			echo'<script>alert("Tài khoản hoặc mật khẩu sai");</script>';
			header("Location: login.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ĐĂNG NHẬP HỆ THỐNG </title>
	<style type="text/css">
		body{
			background:#f2f2f2 ;
			background-image:url("") ;
			background-repeat: no-repeat;

		}
		.wrapper-login{
			width: 15%;
			margin: 0 auto;

		}
		table.table-login tr td {
			padding: 10px;
		}

	</style>
</head>
<body>
	<div class="wrapper-login">
		<form action="" autocomplete="on" method="POST">
			<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
				<tr>
					<td  style="color: red; font-size: 20px;" colspan="2"><h3>ĐĂNG NHẬP HỆ THỐNG
				</tr>
				<tr>
					<td>Tài khoản</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input style="cursor: pointer;" type="submit" name="dangnhap" value="Đăng nhập"></td>
					
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
