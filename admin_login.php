<?php

if(isset($_SESSION['name'])!=null){
  echo "<script>location.href='admin_welcome.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php require('login_partial/header.php')  ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Login</b>Form</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <form  method="post">
        <?php require('code/admin_login.php')  ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">

          <div class="g-recaptcha" data-sitekey="6LeB_ekUAAAAAGrXlDmDpNaybmKUPau4iQ8y0YF6"></div>
          <span id="captcha_error" class="info"></span>

          

        </div>
        <div class="col-4">
            <button type="submit" name="admin" class="btn btn-primary btn-block">Login</button>
          </div>
      </form>
    
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php require('login_partial/footer.php')  ?>
</body>
</html>
