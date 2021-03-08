<?php
session_start();
require('config/connection.php');
if(isset($_POST['user'])){

    $login=mysqli_query($connect, "select * from user_reg where email='".$_POST['email']."' 
    and pass='".$_POST['pass']."'");
    $check=mysqli_num_rows($login);
    $fetch_data=mysqli_fetch_array($login);
    $id=$fetch_data[0];
    $name=$fetch_data[1];
    $sname=$fetch_data[2];
    $artname=$fetch_data[3];
    $email=$fetch_data[4];
     $recaptcha = $_POST['g-recaptcha-response'];
    if (empty($recaptcha)) {
        echo '<script>swal("Error","Recaptcha Required","error")</script>';
    }
     elseif (!(empty($recaptcha))) {
        if($check== 1){
            $_SESSION['id']=$id;
            $_SESSION['user']=$name;
            $_SESSION['sname']=$sname;
            $_SESSION['artname']=$artname;
            $_SESSION['email']=$email;
            echo "<script>location.href='user_welcome.php';</script>";
        
        }elseif(!($check)){
            header('location:login.php');
        }
    }

}

?>