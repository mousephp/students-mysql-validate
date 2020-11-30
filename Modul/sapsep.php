<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SẮP SẾP</title>
</head>

<?php include('master.php'); include('connect.php');?>

<body>

	<?php 				
	if(isset($_GET['theoten'])){
		?>
		<div class="">
			<h2 style="text-align: center;color: blue;">SẮP SẾP THEO TÊN</h2>
			<table class="table  table-striped" style="">
				<thead>
					<tr>
						<th>stt</th>
						<th>Tên đăng nhập</th>
						<th>Họ và tên</th>
						<th>Số điện thoại</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>	
					<tbody>
						<?php
						$sql_list="SELECT * FROM taikhoanthanhvien  ORDER BY tendangnhap ASC";
						$sql_row=mysqli_query($conn,$sql_list);
						while($dulieu=mysqli_fetch_array($sql_row)){
						?>
						<tr>
							<td><?php echo $dulieu['id'] ?></td>
							<td><?php echo $dulieu['tendangnhap'] ?></td>
							<td><?php echo $dulieu['hoten'] ?></td>
							<td><?php echo $dulieu['sdt'] ?></td>
							<td>
								<a href="sua.php?id=<?php echo $dulieu['id']; ?>" title="sửa"><img src="images/edit.png" width="25px">
								</a>
							</td>
							<td>
								<a onclick=" return confirm('bạn có chắc muốn xóa không') " href="xoa.php?id=<?php echo $dulieu['id']; ?>" ><img src='images/delete.jpg' width='25px' >
								</a>
							</td>
						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	<?php } ?>

</body>
</html>