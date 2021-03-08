<?php
require('config/connection.php');
$id=$_GET['id'];
$delete=mysqli_query($connect, "delete from songs_tb where id='$id'");
if($delete){
    echo "<script>location.href='songs.php'</script>";
}elseif(!($delete)){
    echo "<script>alert('Error, Try Again')</script>";
}
?>