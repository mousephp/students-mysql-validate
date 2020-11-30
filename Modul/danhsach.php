<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DANH SÁCH</title>
</head>

<?php include('master.php'); include('connect.php');?>

<body>
	
	<div class="">
		<h2 style="text-align: center;color: blue;">DANH SÁCH</h2>
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
					$d=1;
					$sql_list="SELECT * FROM taikhoanthanhvien ORDER BY id ASC";
					$sql_row=mysqli_query($conn,$sql_list);
					while($dulieu=mysqli_fetch_array($sql_row)){
						?>
						<tr>
							<td><?php echo $d++; ?></td>
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

	</body>
	</html>