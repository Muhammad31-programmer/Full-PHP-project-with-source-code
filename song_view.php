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
       
       

       
        <table class="table table-bordered">
                  <tr>
                      <th>Artist Name</th>
                     
                      <th>Action</th>
                    </tr>
                    <?php
                    include('config/connection.php');
                    $select=mysqli_query($connect, "select * from user_reg ");
                    while($r=mysqli_fetch_array($select)){

                    

                    ?>
                    <tr>
                     
                        <td><?php echo $r[3]?></td>
                        <td><a href="songs.php?name=<?php echo $r[3]?>" class="btn btn-danger btn-xs">View Songs</a></td>
                    </tr>
                <?php    
                }
                ?>

              </table>
      
             
          <!-- ./col -->
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
