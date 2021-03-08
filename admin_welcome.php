<?php
session_start();
if(isset($_SESSION['name'])==null){
  echo "<script>location.href='admin_login.php';</script>";
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from user_reg ");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $name=$fetch['total'];

              ?>
              <div class="inner">
                <h3><?php echo $name?></h3>

                <p>Number of Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
           
            </div>
          </div>
       
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb ");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $songs=$fetch['total'];

              ?>
                <h3><?php echo $songs?></h3>

                <p>Number Of Music</p>
              </div>
              <div class="icon">
                <i class="fa fa-music"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb where  status='Approved'");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $approved=$fetch['total'];

              ?>
                <h3><?php echo $approved?></h3>

                <p>Music Approved</p>
              </div>
              <div class="icon">
                <i class="fa fa-check-circle"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb where status='Rejected'");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $reg=$fetch['total'];

              ?>
                <h3><?php echo $reg?></h3>

                <p>Music rejected</p>
              </div>
              <div class="icon">
                <i class="fa fa-window-close"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="container-fluid">
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Users <small></small></h3>
              </div>
       
        <table class="table table-bordered">
                  <tr>
                      <th>Artist Name</th>
                      <th>Name</th>
                      <th>SurName</th>
                      <th>Email Address</th>
                      <th>Street Address</th>
                      <th>City</th>
                      <th>Code</th>
                      <th>Country</th>
                    </tr>
                    <?php
                    include('config/connection.php');
                    $select=mysqli_query($connect, "select * from user_reg ");
                    while($r=mysqli_fetch_array($select)){

                    

                    ?>
                    <tr>
                        <td><?php echo $r[3]?></td>
                        <td><?php echo $r[1]?></td>
                        <td><?php echo $r[2]?></td>
                        <td><?php echo $r[4]?></td>
                        <td><?php echo $r[5]?></td>
                        <td><?php echo $r[6]?></td>
                        <td><?php echo $r[7]?></td>
                        <td><?php echo $r[8]?></td>
                    </tr>
                <?php    
                }
                ?>

              </table>
            </div>
        </div>
    
          </div>
         </div>
        
      </div>
    </section>
   
  </div>

<?php require('dashboard_partial/footer.php')  ?>

 

</div>
<?php require('dashboard_partial/footer_lib.php');   ?>
</body>
</html>
