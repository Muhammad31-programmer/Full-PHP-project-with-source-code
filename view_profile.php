<?php
session_start();
if(isset($_SESSION['user'])==null){
  header('location:login.php');
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
                <h3 class="card-title">View Profile <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
              <?php require('code/update.php')?>
              <?php require('code/songs_add.php')  ?>
                <div class="card-body">
                  <?php
                  require('config/connection.php');
                  $select=mysqli_query($connect, "select * from user_reg where name='".$_SESSION['user']."'");
                  while($row=mysqli_fetch_array($select)){

                  
                  ?>
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo $row[1]?>" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Surname</label>
                    <input type="text" name="sname" value="<?php echo $row[2]?>" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="email" value="<?php echo $row[4]?>" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Street Address</label>
                   <textarea name="saddress" class="form-control"><?php  echo $row[5]?></textarea>
                  </div>
                
                  <div class="form-group">
                    <label for="">City</label>
                    <input type="text" name="city" value="<?php echo $row[6]?>" class="form-control" id=""  >
                  </div>
                  <div class="form-group">
                    <label for="">Postal Code</label>
                    <input type="text" name="code" value="<?php echo $row[7]?>" class="form-control" id=""  >
                  </div>
                  <div class="form-group">
                    <label for="">County</label>
                    <input type="text" name="country" value="<?php echo $row[7]?>" class="form-control" id=""  >
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass" value="<?php echo $row[8]?>" class="form-control" id=""  >
                  </div>
                  
                <?php  
                }
                ?>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
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
