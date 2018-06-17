<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $code =$_POST['code'];

    $q="DELETE FROM youtubeVideos where video='$code'";
    mysqli_query($con,$q);
    header('location:../admin/#youtube');

?>