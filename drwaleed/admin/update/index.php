
<?php 
    

session_start();
if(!isset($_SESSION['x'])||!isset($_SESSION['update'])){
    header('location:../login');
}
if($_SESSION['update']=='')
    $_SESSION['update']= $_POST['code'];

?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Admin-update</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/admin.css? <?php echo'rand();' ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="../js/admin2.js?  <?php echo' rand()' ?>"></script>
        <link rel="icon" href="../../images/logo.png">
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="ml-3" style="width:30%;font-size:20px">
        <?php 

            echo '<span > <span id="welcome">Welcome</span> <strong>',$_SESSION['x'],'</strong></span>';
        
        ?>
        
        </div>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mr-auto"></div>
         <form action="../signup" class="form-inline my-2 my-lg-0 mr-2">  
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">New Admin</button>
    </form>
         <div  class="my-2 my-lg-0">  
            <a class="btn btn-outline-danger" href="../logout.php">Logout</a>
        </div>
    </div>
    </nav>

    <div id="danger" class="alert alert-danger alert-dismissible fade show text-center mt-2" style="opacity:0;" role="alert">
            <strong>Fill all areas please</strong>
        </div>
    <div class="row mt-3">
        <div style="margin:0 auto" class="card  col-5">
            <div class="card-header text-center">
                <h4> <strong>Update</strong> </h4>
                <?php 
                    $temp=substr($_SESSION['update'],0,7).' class="video-item" '.substr($_SESSION['update'],8,strlen($_SESSION['update']));
                     echo $temp;
                     

                     ?>
            </div>
            <div class="card-block">
                <form onsubmit="return f();" action="update.php" method="post" class="form-inline">
                    <?php
                    echo'<textarea name="code" style="height:100px;width:300px;resize:none;display:none" class="form-control">'.$_SESSION['update'].'</textarea>'                
                    ?>
                    <textarea type="text" id="code" name="code1" style="height:100px;width:300px;resize:none;" class="form-control"></textarea>
                    <button  class="btn btn-success ml-2" type="submit" >Update</button>

                </form>
                
            </div>
        </div>
    
    </div>
    
</body>
</html>