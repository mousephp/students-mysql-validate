<?php 
session_start();
$login='';
$check='';
$password=$tendangnhap='';
if(isset($_POST['btnsubmit'])){
  $password=md5($_POST['password']);
  $tendangnhap=$_POST['tendangnhap'];

  if(empty($_POST['tendangnhap']) || empty($_POST['password'])){
   $login ="<h5 style='color:red;text-align:center;'> Bạn cần nhập đầy dủ thông tin </h5>";
  // $check='1';
 }else{
   $sql_login="SELECT * FROM taikhoanthanhvien WHERE password='$password' AND tendangnhap='$tendangnhap' ";
   $sql_thucthi=mysqli_query($conn,$sql_login);
   $sql_row=mysqli_fetch_array($sql_thucthi);

   if(mysqli_num_rows($sql_thucthi)>=1){
    $_SESSION['username']=$tendangnhap;
    echo "<h5 style='color:red;text-align:center;'>Đăng nhập thành công!</h5>";
   //$check='2';
    sleep(1);

    header('location:Modul/danhsach.php');
  }else{
   // $check='3';
    $login ="<h5 style='color:red;text-align:center;'>Tài khoản hoặc mật khẩu không đúng!</h5>";
  }

}

}



?>
