<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
	ul li a{
		color: #9d9d9d;
	}
	ul li{
		list-style: none;
	}
</style>

<?php  include('connect.php'); include('../log/sql_log.php');?>

<?php 
if(!isset($_GET['search'])){
	$search="";
}else{
	$search=$_GET['search'];
} 

?>


<body>
	<nav class="navbar navbar-inverse " style="background: #3b6b04;">
		<div class="container-fluid navbar-fixed-top" style="background: #3b6b04;">
			<div class="navbar-header">
				<a class="navbar-brand mauchu" href="danhsach.php" style="font-size: 15px;">BÀI TẬP QUẢN LÝ TÀI KHOẢN THÀNH VIÊN</a>
			</div>
			<ul class="nav navbar-nav">				
				<li><a href="danhsach.php">DS tài khoản</a></li>
				<li><a href="dangky.php">Thêm thực tài khoản</a></li>

				<form method="GET"  class="form-horizontal" style="display: inline-block;line-height: 50px;">			
					<ul>
						<li class="dropdown">
							<a class="dropdown-toggle mauchu" data-toggle="dropdown" href="#">Săp sếp tài khoản
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="sapsep.php?theoten" class="mauchu">theo tên</a></li>
							</ul>
						</li>
					</ul>
				</form>
				<li><a href="../dangnhap.php">Đăng nhập tài khoản <span style="color: darksalmon;" >(User:<?php echo $_SESSION['username']; ?>)</span></a></li>
				<!-- <li><a href="logout.php">Logout</a></li> -->
			</ul>

			<form class="navbar-form navbar-right" method="GET" action="timkiem.php?search">
				<div class="input-group">
					<input type="text" class="form-control" value="<?php echo $search; ?>" placeholder="Search" name="search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</nav>



</body>
</html>
