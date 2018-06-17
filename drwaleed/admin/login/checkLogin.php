<?php 
    session_start();

     $email =$_POST['email'];
     $password= $_POST['password'];
     require_once "../security/security.php";
     $security= new security;
     $log_error=$security->validateInput($email);
     if(!$log_error){
        $log_error=$security->validateInput($password);
     }
     

    if(!$log_error){
    require_once "../../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $q="select * from admins where email='$email' and password='$password'";
    $result=mysqli_query($con,$q);
    $arr=mysqli_fetch_array($result);
    
    
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['x']=$arr['name'];
        header('location:../../admin/');
    }
    else
    {
        
        header('location:../login/');


    }
}
else
    {
        
        header('location:../login/');


    }
    
    
       

?>