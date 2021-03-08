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
       
       <div style="overflow-x:auto;">
       


        <table class="table table-bordered">
                  <tr>
                     <th>Name</th>
                      <th>SurName</th>
                      <th>Email Address</th>
                      <th>Album Name</th>
                      <th>Song Title</th>
                      <th>Song</th>
                      <th>Status</th>
                      <th>Approved</th>
                      <th>Rejected</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                    <?php
                    include('config/connection.php');
                    $select=mysqli_query($connect, "select * from songs_tb where artname='".$_GET['name']."' ");
                    while($r=mysqli_fetch_array($select)){
                         if($r[9]=='Approved'){
                      $whatscolor = 'background-color: green';
  
                     }elseif($r[9]=='Rejected'){
                      $whatscolor = 'background-color: red';
  
                     }
                     elseif($r[9]=='Pending'){
                         $whatscolor = 'background-color: blue';
                         
                     }

                    

                    ?>
                    <tr>
                        <td><?php echo $r[1]?></td>
                        <td><?php echo $r[2]?></td>
                        <td><?php echo $r[4]?></td>
                        <td><?php echo $r[5]?></td>
                        <th><?php echo $r[6]?></th>
                        <td><audio controls><source src="audio/<?php echo $r[7]?>" type="audio/mpeg"></audio></td>
                <td style="<?php echo $whatscolor?>"><b style="color:white"><?php echo $r[9]?></b></td>
                        <td><a href="approved.php?id=<?php echo $r[0]?>" class="btn btn-primary btn-xs"> Approved</a>  </td>
                        <td><a href="rejected.php?id=<?php echo $r[0]?>" class="btn btn-danger btn-xs">Rejected</a> </td>
                           <td><a href="mail.php?id=<?php echo $r[0]?>" class="btn btn-primary btn-xs"><i class="fa fa-envelope"></i> Mail</a></td>
                         <td><a href="delete.php?id=<?php echo $r[0]?>" class="btn btn-danger btn-xs">Delete</a></td>
                    </tr>
                <?php    
                }
                ?>

              </table>
              </div>
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
