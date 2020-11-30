<!DOCTYPE html>
<html lang="en">
<head>
  <title>ĐĂNG KÝ</title>
  <meta charset="utf-8">
</head>

<?php include('master.php'); include('connect.php');?>

<?php 

$err=$tenErr=$pass=$tendangnhap=$passwordErr=$sdtErr=$emailErr='';
$tendangnhap=$password=$nhaplaipassword=$hoten=$sdt=$email=$diachi="";

if(isset($_POST['btnsubmit'])){

  if (empty($_POST["tendangnhap"])) {
    $tenErr = "<h5 style='color:red;text-align:center;'>Tên đăng nhập không được bỏ trống </h5>";
  }else {
    $tendangnhap=$_POST['tendangnhap'];
    if (!preg_match("/^[0-9a-z]+$/",$tendangnhap)) {
     $tenErr= "<h5 style='color:red;text-align:center;'>Họ chỉ chấp nhận chữ thường và không khoảng trắng.</h5>";
     $err=1;
   }
 }

 if(empty($_POST['password'])){
  $passwordErr = "<h5 style='color:red;text-align:center;'>Password không được bỏ trống </h5>";
}else{ 
  $password=$_POST['password'];
  if(strlen($_POST["password"]) < '8' || strlen($_POST["password"])  > '50') {
    $passwordErr = "<h5 style='color:red;text-align:center;'>Mật khẩu của bạn phải chứa ít nhất 8 ký tự và <= 50 ký tự!</h5>";
    $err=1;
  }
}

if(empty($_POST['sdt'])){
  $sdtErr="<h5 style='color:red;text-align:center;'>sdt không được bỏ trống </h5>";
}else{
  $sdt=$_POST['sdt'];
  if( (strlen($_POST["sdt"]) >'20') || (strlen($_POST["sdt"]) <'10')){
   $sdtErr="<h5 style='color:red;text-align:center;'>sdt không được > 20 và < 10 </h5>";
   $err=1;
 }
}

if(empty($_POST['email'])){
 $emailErr = "<h5 style='color:red;text-align:center;'>Email không được bỏ trống </h5>";
}else{
  $email=$_POST['email'];
  if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
    $emailErr= "<h5 style='color:red;text-align:center;'>Email không đúng định dạng</h5>";
    $err=1;
  }
}

$nhaplaipassword=$_POST['nhaplaipassword'];
$hoten=$_POST['hoten'];
$diachi=$_POST['diachi'];

// if ((empty($_POST['tendangnhap']) || !empty(!preg_match("/^[0-9a-z]+$/",$tendangnhap))) || empty($_POST['password']) ||  empty($_POST['nhaplaipassword']) || empty($_POST['hoten']) || (empty($_POST['sdt']) || (strlen($_POST["sdt"]) >'20') || (strlen($_POST["sdt"]) <'10') ) || (empty($_POST['email']) || !empty(!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) ) || empty($_POST['diachi']) ) {
//   $err= "<h5 style='color:red;text-align:center;'> Bạn cần nhập đầy dủ thông tin </h5>";
// } 
//toi uu
if ($err) {
  $err= "<h5 style='color:red;text-align:center;'> Bạn cần nhập đầy dủ thông tin </h5>";
} else {
  $sql_row="SELECT * FROM taikhoanthanhvien WHERE tendangnhap='$tendangnhap' ";
  $sql_thucthi=mysqli_query($conn,$sql_row);
  if(mysqli_num_rows($sql_thucthi)>0){
    echo "<h5 style='color:red;text-align:center;'>đã tồn tại trong csdl</h5>";
  }else{
   if($password!==$nhaplaipassword){
    $pass= "<h5 style='color:red;text-align:center;'>Mật khẩu không trùng nhau</h5>";
  }else{
   if(strlen($_POST["password"]) < '8' || strlen($_POST["password"])  > '50'){
     $passwordErr = "<h5 style='color:red;text-align:center;'>Mật khẩu của bạn phải chứa ít nhất 8 ký tự và <= 50 ký tự!</h5>";
   }else{
     $password = md5($password);
     $sql_insert="INSERT INTO taikhoanthanhvien (tendangnhap,password,hoten,sdt,email,diachi) VALUES ('$tendangnhap','$password','$hoten','$sdt','$email','$diachi') ";
     mysqli_query($conn,$sql_insert);
     echo "<p style='color:green;text-align: center;'>đã thêm thành công!</p>";
       // header('location:index.php');
   }

 }

}

}
}

?>


<script type="text/javascript">
/*
  function validateform(){

  var str = /^[0-9a-z]+$/;// /[0-9A-Za-z]+/ ==> /^[A-Za-z]+$/   
  var tendangnhap=document.getElementById('tendangnhaptxt').value;
  var result= str.test(tendangnhap);
  if(result){
    alert('Tên đăng nhập hợp lệ');
    return true;
  }else{
    alert('Tên đăng nhập không hợp lệ');    
  }
  */

//   var password=document.formtxt.password.value;
//   if(password.length <8 || password.length >50){
//     alert('mật khẩu phải trong khoảng >=8 || <=50 !');
//   }

//   var phone = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3,4})$/;
//   var sdt_=document.getElementById('sdt').value;
//   if(phone.test(sdt_)){
//     alert('sđt nhập hợp lệ');
//   }else{
//     alert('sđt nhập không hợp lệ');
//   }

//   var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//   var mail=document.getElementById('email').value;
//   if(mailformat.test(mail)){
//    alert("email đung định dạng");
//    mail.focus;
//    return false;
//  }
//  else{
//   alert("email không đúng định dạng");
//   mail.focus;
//   return false;
// }


//}
</script>


<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-lg-offset-1">

       <h2 class="text-center" style="color: green;">ĐĂNG KÝ</h2>
       <form class="form-horizontal" action="" method="POST" name="formtxt"  onsubmit="return validateform()" >

        <?php echo $err; ?>
        <?php echo $tenErr; ?>
        <div class="form-group">
          <label class="control-label col-sm-3" >Tên đăng nhập
          </label>        

          <div class="col-sm-9">
            <input type="text" class="form-control" id="tendangnhaptxt" placeholder="Tên đăng nhập
            " name="tendangnhap" maxlength="20" value="<?php echo $tendangnhap; ?>">
          </div>
        </div>

        <?php echo $passwordErr; ?>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Nhập Password</label>
          <div class="col-sm-9">          
            <input type="password" class="form-control"  placeholder="Nhập Password" name="password" maxlength="50" value="<?php echo $password; ?>">
          </div>
        </div>
        <?php echo $pass; ?>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Xác nhận Password</label>
          <div class="col-sm-9">          
            <input type="password" class="form-control"  placeholder="Xác nhận Password" name="nhaplaipassword" maxlength="50" value="<?php echo $nhaplaipassword; ?>">          
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="">Họ và tên</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Họ và tên" name="hoten" maxlength="150" value="<?php echo $hoten; ?>">
          </div>
        </div>

        <?php echo  $sdtErr; ?>
        <div class="form-group">
          <label class="control-label col-sm-3" for="">Số điện thoại</label>
          <div class="col-sm-9">
            <input type="number" class="form-control"  placeholder="sdt" id="sdt" name="sdt"  value="<?php echo $sdt; ?>">
          </div>
        </div>

        <?php echo $emailErr; ?>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="email"  placeholder="Enter email" name="email" value="<?php echo $email; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="">Địa chỉ</label>
          <div class="col-sm-9">
            <textarea rows="6" cols="76" type="text" name="diachi"  ><?php echo $diachi; ?></textarea>
          </div>
        </div>

        <input class="form-control btn-success" type="submit" name="btnsubmit" value="đăng ký"   ></input>
        <input class="form-control btn-danger" type="reset" name="btnreset" value="nhập lại"></input>

      </form>
    </div>

  </body>
  </html>
