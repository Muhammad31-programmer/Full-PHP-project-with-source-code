<?php
include('config/connection.php');
if(isset($_POST['sb'])){
    $insert=mysqli_query($connect, "insert into add_tb(user_id, alname)
    values('".$_SESSION['id']."', '".$_POST['alname']."')");
    if($insert){
        echo "<script>swal('Good Job','Inserted Success','success')</script>";

    }elseif(!($insert)){
                echo "<script>swal('Try Again','Try Again','error')</script>";

    }

}

?>