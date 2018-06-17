<!DOCTYPE HTML>
<html>
     <head>
        <title>Admin|login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <link rel="stylesheet" href="../css/admin.css?   <?php date("l jS \of F Y h:i:s A"); ?>">
        <script src="../js/script.js?   <?php date("l jS \of F Y h:i:s A"); ?>"> </script>
        <link rel="icon" href="../../images/logo.png">
    </head>
    <body>
        
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <h4 style="margin:0 auto"><span style="font-family: Century Gothic;color:rgb(77, 139, 81);">DrWaleed</span> <strong>- Admin</strong><h4>
</nav>
        <div id="danger" class="alert alert-danger alert-dismissible fade show text-center mt-2" style="opacity:0;" role="alert">
            <strong>Fill all areas please</strong>
        </div>
        <div class="conrainer mt-2 row">
            <div class="col-3"></div>
            <div  class="col-6">
                <div  class="card">
                    <div class="card-header text-center">
                        <h4>login</h4>
                    </div>
                    <form onsubmit="return f();"  class="card-block" action="checkLogin.php" method="post" >
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                        <input class="form-control mt-2" id="password" name="password" type="password" placeholder="Password">
                        <div class="row">
                            <button  class="btn btn-primary mt-2" style="margin:0 auto;" type="submit">Login</button>
                        </div>
                    </form>
                
                </div>
            </div>
            <div class="col-5"></div>
        </div>
  
    </body>

</html>