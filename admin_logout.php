<?php
session_start();
if(isset($_SESSION['name'])!=null){
    session_destroy();
    header('location:admin_login.php');

}
?>