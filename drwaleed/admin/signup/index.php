
<!DOCTYPE HTML>
<?php 
session_start();
if(!isset($_SESSION['x'])){
    header('location:../login');
}

?>
<html>
     <head>
        <title>Admin|SignUp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="../js/admin3.js?   <?php date("l jS \of F Y h:i:s A"); ?> "> </script>
        <link rel="stylesheet" href="../css/admin.css?   <?php date("l jS \of F Y h:i:s A"); ?>">
        <link rel="icon" href="../../images/logo.png">
    </head>
    <body>
        
         <div id="danger" class="alert alert-danger alert-dismissible fade show text-center mt-2" style="opacity:0;" role="alert">
            <strong>Fill all areas please</strong>
        </div>
         <div id="danger2" class="alert alert-danger alert-dismissible fade show text-center mt-2" style="opacity:0;" role="alert">
            <strong>Password is not confirmed</strong>
        </div>
        <div class="conrainer mt-5 row">
            <div class="col-3"></div>
            <div class="col-6">
                <div id="form1" class="card">
                    <div class="card-header text-center">
                        <h4>SignUp</h4>
                    </div>
                    <form onsubmit="return f();" class="card-block" action="addAdmin.php" method="post" >
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                        <input class="form-control mt-1" id="name" name="name" type="text" placeholder="Name">
                        <input class="form-control mt-1" id="password" name="password" type="password" placeholder="Password">
                        <input class="form-control mt-1" id="passwordcon"  type="password" placeholder="Confirm Password">
                        
                        <div class="row">
                            <button onclick="f()" class="btn btn-success mt-2" style="margin:0 auto;" type="submit">Sign Up</button>
                        </div>
                    </form>
                
                </div>
            </div>
            <div class="col-5"></div>
        </div>
    
    </body>

    </html>