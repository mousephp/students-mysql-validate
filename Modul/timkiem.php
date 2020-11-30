<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DANH SÁCH TÌM KIẾM</title>
</head>

<?php include('master.php'); include('connect.php');?>

<body>
	
	
	<?php 
	$search=$_GET['search'];//lấy tù khóa từ form
	$row_sql="SELECT * FROM taikhoanthanhvien WHERE tendangnhap LIKE '%$search%' ";
	$row_thuchien=mysqli_query($conn,$row_sql);
	if($dulieu =mysqli_num_rows($row_thuchien)>0){
	?>
	<div class="">
		<h2 style="text-align: center;color: blue;">DANH SÁCH TÌM KIẾM</h2>
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
					$search=$_GET['search'];
					$sql_list="SELECT * FROM taikhoanthanhvien WHERE tendangnhap LIKE '%$search' ";
					$sql_list="SELECT * FROM taikhoanthanhvien WHERE tendangnhap LIKE '%$search%' ";
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
	<?php }else{ ?>
		<h1 style="text-align: center;color: red;">Không có bản ghi nào với tên là <?php echo $search; ?></h1>
	<?php } ?>

</body>
</html>