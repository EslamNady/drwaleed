<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");
   

    $id =$_POST['id'];

    $con=mysqli_connect("localhost","root","","drwaleeddb");
    $q="DELETE FROM sliderimages where id='$id'";
    mysqli_query($con,$q);
    header('location:../admin/#slider');

?>