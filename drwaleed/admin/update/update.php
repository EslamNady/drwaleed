 <?php 
    require_once "../../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");

    $code=$_POST['code1'];


    $q="UPDATE youtubeVideos set video='$code'  where video='$_POST[code]'";
    unset($_SESSION['update']);

    mysqli_query($con,$q);
    header('location:../../admin/#youtube');
    
    ?>