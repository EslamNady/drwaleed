<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $para=$_POST["specializeparagraph"];
    $title=$_POST["title"];
    $q="INSERT INTO speciality (title,paragraph) VALUES ('$title','$para')";
    $result=mysqli_query($con,$q);
    if($result){
        echo'ahmad b2a';
    }
    header('location:../admin/');             
                  
                 
?>