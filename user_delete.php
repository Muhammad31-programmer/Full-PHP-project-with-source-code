<?php
include('config/connection.php');
$delete=mysqli_query($connect, "delete from user_reg where id='".$_GET['id']."'");
$delete_user_data=mysqli_query($connect, "delete from songs_tb where user_id='".$_GET['id']."'");
if($delete){
	echo "<script>location.href='view_users.php';</script>";
} else{
	echo "<script>alert('try again')</script>";
}

 ?>