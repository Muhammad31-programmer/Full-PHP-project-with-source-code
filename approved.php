<?php
require('config/connection.php');
$id=$_GET['id'];
$approved=mysqli_query($connect, "update songs_tb set status='Approved' where id='$id'");
if($approved){
echo "<script>location.href='song_view.php'</script>";
}
?>