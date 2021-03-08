<!DOCTYPE html>
<html>
<head>
 <?php require('login_partial/header.php')  ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Registration</b>Form</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register as new User</p>

      <form  method="post">
        <?php require('code/user_reg.php')   ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="sname" placeholder="Surname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="artname" placeholder="Artist name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea class="form-control" name="address" placeholder="Street Address" required></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-address-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="city" placeholder="City" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-building-o"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="code" placeholder="Post Code" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-building-o"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="country" placeholder="Country" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-flag"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" required>
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="user" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="login.php" class="text-center">I already Registered</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php require('login_partial/footer.php') ?>
</body>
</html>
