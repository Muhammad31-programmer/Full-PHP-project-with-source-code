<?php
if(isset($_POST['sb'])){
    $to=$_POST['to'];
    $subject=$_POST['sbj'];
    $message=$_POST['message'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$mail_send=mail($to, $subject, $message, $headers);
if($mail_send){
    echo "<script>swal('Great!!','Notification Send Success','sucess')</script>";
}elseif(!($mail_send)){
    echo "<script>swal('Ooops!!','Try Again','error')</script>";
}

}

?>