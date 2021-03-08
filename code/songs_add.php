<?php
require('config/connection.php');
if(isset($_POST['sb'])){

    $audio_name=$_FILES['file']['name'];
    $audio_tmp=$_FILES['file']['tmp_name'];
    $location="audio/";
    if(move_uploaded_file($audio_tmp,$location.$audio_name )){
        $insert=mysqli_query($connect, "insert into songs_tb(name, sname, artname,email, artist_album,title, song_file,user_id, status )
        values('".$_POST['name']."', '".$_POST['sname']."','".$_POST['artname']."', '".$_POST['email']."', '".$_POST['alname']."'
        ,'$audio_name', '$audio_name','".$_SESSION['id']."', 'Pending')");
        if($insert){
            echo "<script>swal('Great Job','Uploaded Success','success')</script>";
        }elseif(!($insert)){
             echo "<script>swal('Try Again','Not Uploaded','error')</script>";

        }
    }

}
// if(isset($_POST['sb'])){
//     $maxsize = 5242880; // 5MB

//     $name = $_FILES['file']['name'];
//     $target_dir = "audio/";
//     $target_file = $target_dir . $_FILES["file"]["name"];

//     // Select file type
//     $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//     // Valid file extensions
//     $extensions_arr = array("mp3","avi","3gp","mov","mpeg");

//     // Check extension
//     if( in_array($videoFileType,$extensions_arr) ){
        
//        // Check file size
//        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
//          echo "<script>alert('File too large. File must be less than 5MB.')</script>";
//        }else{
//          // Upload
//          if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
//            // Insert record
//            $insert=mysqli_query($connect, "insert into songs_tb(name, sname, email, artistname, artist_album, song_file)
//            values('".$_POST['name']."', '".$_POST['sname']."', '".$_POST['email']."', '".$_POST['aname']."'
//            ,'".$_POST['alname']."', '$target_file')");

//            echo "<script>alert('success')</script>";
//          }
//        }

//     }else{
//        echo "Invalid file extension.";
//     }

//   } 

?>