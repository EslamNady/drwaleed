<?php 
    require_once "../../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $email =$_POST['email'];
    $name =$_POST['name'];
    $password= $_POST['password'];

    require_once "../security/security.php";
     $security= new security;
     $error=$security->validateInput($email);
     if(!$error)
        $error=$security->validateInput($name);
     if(!$error)
        $error=$security->validateInput($password);
     
        
    if(!$error){
        $q="INSERT INTO admins VALUES ( '$email','$name','$password' )";
        mysqli_query($con,$q);
    }
    header('location:../../admin');

?>