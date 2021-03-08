<?php
require('config/connection.php');
if(isset($_POST['user'])){

    
      $recaptcha = $_POST['g-recaptcha-response'];
    if (empty($recaptcha)) {
        echo '<script>swal("Error","Recaptcha Required","error")</script>';
    }
     elseif (!(empty($recaptcha))) {
      $select=mysqli_query($connect, "select * from user_reg where email='".$_POST['email']."'");
      $check=mysqli_num_rows($select);
      if($check>0){
        echo '<script>swal("Duplicate found","Email Already Exist","error")</script>';


      }else{
         $insert=mysqli_query($connect, "insert into user_reg(name, sname,artname, email, address, city, code, country,
    pass)values('".$_POST['name']."','".$_POST['sname']."','".$_POST['artname']."','".$_POST['email']."',
    '".$_POST['address']."','".$_POST['city']."','".$_POST['code']."'
    ,'".$_POST['country']."','".$_POST['pass']."' )");
        if($insert){
            echo "<script>location.href='login.php'</script>";
        }elseif(!($insert)){
            echo "<script>alert('Try Again')</script>";
    
        }
      }
        
     }

}

?>