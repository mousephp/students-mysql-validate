<?php include('connect.php');?>

<?php 
$id=$_GET['id'];
$sql_delete="DELETE FROM taikhoanthanhvien WHERE id='$id' ";
mysqli_query($conn,$sql_delete);
header('location:danhsach.php');
?>
