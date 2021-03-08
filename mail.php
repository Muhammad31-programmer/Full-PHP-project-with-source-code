<?php
session_start();
if(isset($_SESSION['name'])==null){
  header('location:admin_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
 <?php require('dashboard_partial/header_lib.php');  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
   <?php require('dashboard_partial/admin_sidebar.php')  ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
       
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Send Mail <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                  <?php require('code/mail.php')?>   
          <?php
          require('config/connection.php');
          $get_email=mysqli_query($connect, "select * from songs_tb where id='".$_GET['id']."'");
          $fetch_data=mysqli_fetch_array($get_email);
          $mail=$fetch_data[3];
          ?>
                <div class="card-body">
                <div class="form-group">
                    <label for="">To:  </label>
                    <input type="text" name="to" value="<?php echo $mail?>" readonly  class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Subject: </label>
                    <input type="text" name="sbj"  class="form-control" id=""required >
                  </div>
                  <div class="form-group">
                    <label for="">Message: </label>
                    <textarea class="form-control" name="message" required></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="sb" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
    
        </div>
        <!-- /.row -->
        <!-- Main row -->
    
        
      </div>
    </section>
   
  </div>

<?php require('dashboard_partial/footer.php')  ?>

 

</div>
<?php require('dashboard_partial/footer_lib.php');   ?>
</body>
</html>
