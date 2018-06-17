
<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $image=$_POST['imageName'];
    $q="update aboutDoctor set image='$image'";
    $result=mysqli_query($con,$q);
    header('location:../admin');
?>    