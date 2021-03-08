<?php
require('config/connection.php');
$id=$_GET['id'];
$rejected=mysqli_query($connect, "update songs_tb set status='Rejected' where id='$id'");
if($rejected){
echo "<script>location.href='song_view.php'</script>";
}
?>