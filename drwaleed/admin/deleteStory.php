<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $id =$_POST['id'];

    $q="DELETE FROM stories where id='$id'";
    mysqli_query($con,$q);
    $filename1 = $_POST['front']; //get the filename
    $filename2 = $_POST['back']; //get the filename
    unlink('../images/stories/'.DIRECTORY_SEPARATOR.$filename1); //delete it
    unlink('../images/stories/'.DIRECTORY_SEPARATOR.$filename2);
    header('location:../admin/#success-stories');

?>