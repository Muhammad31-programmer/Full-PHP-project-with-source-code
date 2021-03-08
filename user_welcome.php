<?php
session_start();
if(isset($_SESSION['user'])==""){
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
        <div class="row">
        
       
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb where name='".$_SESSION['user']."'");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $no=$fetch['total'];

              ?>
                <h3><?php echo $no?></h3>

                <p>Number Of Music</p>
              </div>
              <div class="icon">
                <i class="fa fa-music"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb  where name='".$_SESSION['user']."' and status='Approved'");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $check=$fetch['total'];

              ?>
              <div class="inner">
                <h3><?php echo $check?></h3>

                <p>Music Approved</p>
              </div>
              <div class="icon">
                <i class="fa fa-check-circle"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <?php
              require('config/connection.php');
              $select=mysqli_query($connect, "select count(*) as total from songs_tb  where name='".$_SESSION['user']."' and status='Rejected'");
              $fetch=mysqli_fetch_assoc($select);
              
              
              $reg=$fetch['total'];

              ?>
              <div class="inner">
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
          <div style="overflow-x:auto;">
       


       <table class="table table-bordered">
                 <tr>
                 <th>Name</th>
                     <th>SurName</th>
                     <th>Email Address</th>
                     <th>Artist Name</th>
                     <th>Album Name</th>
                     <th>Song Title</th>
                     <th>Song</th>
                     <th>Status</th>
                      <th>Action</th>
                 
                   </tr>
                   <?php
                   include('config/connection.php');
                   $select=mysqli_query($connect, "select * from songs_tb where name='".$_SESSION['user']."' ");
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
                       <td><?php echo $r[3]?></td>
                       <td><?php echo $r[4]?></td>
                       <td><?php echo $r[5]?></td>
                       <td><?php echo $r[6]?></td>
                       <td><audio controls><source src="audio/<?php echo $r[7]?>" type="audio/mpeg"></audio></td>
                       <td style="<?php echo $whatscolor ?>"><b style="color:white"><?php echo $r[9]?></b></td>
                         <td><a href="delete_song.php?id=<?php echo $r[0]?>" class="btn btn-danger btn-sm">Delete</a></td>
                   </tr>
               <?php    
               }
               ?>

             </table>
             </div>
     
          </div>
         </div>
        
      </div>
    </section>
   
  </div>


  <?php require('dashboard_partial/footer.php')  ?>

</div>
<!-- ./wrapper -->
<?php require('dashboard_partial/footer_lib.php')  ?>
</body>
</html>
