<?php
include('config/connection.php');
if(isset($_POST['update'])){

    $update=mysqli_query($connect, "update user_reg set name='".$_POST['name']."', sname='".$_POST['sname']."',
     email='".$_POST['email']."', address='".$_POST['saddress']."', city='".$_POST['city']."',
    code='".$_POST['code']."', country='".$_POST['country']."', pass='".$_POST['pass']."' where name='".$_SESSION['user']."'");
    if($update){
        echo "<script>swal('Good Job','Profile Updated Success','success')</script>";
    }elseif(!($update)){
     echo "<script>swal('Error','Not Updated ! Try Again','error')</script>";
    }

}

?>