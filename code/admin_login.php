<?php
session_start();
require('config/connection.php');
if(isset($_POST['admin'])){

    $login=mysqli_query($connect, "select * from admin_logintb where email='".$_POST['email']."' 
    and passwrd='".$_POST['pass']."'");
    $check=mysqli_num_rows($login);
    $fetch_data=mysqli_fetch_array($login);
    $name=$fetch_data[1];
    $recaptcha = $_POST['g-recaptcha-response'];
    if (empty($recaptcha)) {
        echo '<script>swal("Error","Recaptcha Required","error")</script>';
    }
    elseif (!(empty($recaptcha))) {
        if($check== 1){
            $_SESSION['name']=$name;
            echo "<script>location.href='admin_welcome.php'</script>";
        }elseif(!($check)){
            header('location:admin_login.php');
        }
    }

}

?>