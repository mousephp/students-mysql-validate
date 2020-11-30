<!DOCTYPE html>
<html lang="en">
<head>
  <title>ĐĂNG NHẬP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="log/jquery-1.12.3.js"></script>
  <script src="log/js.js"></script>
</head>

<?php  include('Modul/connect.php');include('log/sql_log.php');?>


<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-lg-offset-1">

        <h2 class="text-center" style="color: blue;">ĐĂNG NHẬP</h2>
        <form class="form-horizontal" action="" method="POST" id="txtfrom" onsubmit="">
          <?php echo $login; ?>
          <div class="form-group">
            <label class="control-label col-sm-3" for="email">Tên đăng nhập</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tendangnhap" value="<?php echo $tendangnhap; ?>" placeholder="Enter ten dang nhap" name="tendangnhap">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Nhập Password</label>
            <div class="col-sm-9">          
              <input type="password" class="form-control" id="password" placeholder="Nhập Password" value="<?php echo $password; ?>" name="password">
            </div>
          </div>
          
          <div id="loidangnhap"></div>
          <input class="form-control btn-success" type="submit" id="btnsubmit" name="btnsubmit" value="đăng nhập" onclick=""></input>
          <input class="form-control btn-danger" type="reset" name="btnreset" value="nhập lại"></input>
        </form>

      </div>
    </div>

  </div>


</body>
</html>
