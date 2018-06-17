<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

 $new=$_POST['doctorparagraph'];


    $q="UPDATE aboutDoctor set paragraph='$new'  where id=1";
    

    $result=mysqli_query($con,$q);
    header('location:../admin');
    
    ?>