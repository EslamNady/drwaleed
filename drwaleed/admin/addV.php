<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");
   

$code =$_POST['code'];

$codePos=strpos($code,'v=');
$code=substr($code,$codePos+2);

$firstHalf='<iframe src="https://www.youtube.com/embed/';
$secondHalf='" frameborder="0" ></iframe>';
$code=$firstHalf.$code.$secondHalf;


    $q="INSERT INTO youtubeVideos (video) VALUES ('$code')";
    mysqli_query($con,$q);
    header('location:../admin/#youtube');

?>