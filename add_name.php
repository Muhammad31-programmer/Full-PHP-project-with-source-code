<?php
session_start();
if(isset($_SESSION['user'])==null){
 echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Dashboard</title>
  <?php require('dashboard_partial/header_lib.php');  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Main Sidebar Container -->
 <?php require('dashboard_partial/user_sidebar.php')  ?>
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
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                  <?php include('code/add_name.php')?>
          
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="">Album Name: </label>
                    <input type="text" name="alname" class="form-control" id="" >
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
        <!-- /.row -->
        <!-- Main row -->
     
        
      </div>
    </section>
   
  </div>


  <?php require('dashboard_partial/footer.php')  ?>

</div>
<!-- ./wrapper -->
<?php require('dashboard_partial/footer_lib.php')  ?>
</body>
</html>
