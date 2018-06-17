<?php require_once "../classes/DBclass.php";
 $connect= new connection;
 $con=$connect->connect();
 mysqli_set_charset($con,"utf8");

?>
<!DOCTYPE HTML >

<html>
    <head>


        <title>Dr Waleed Ibrahim</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <link rel="stylesheet" href="../css/main.css? <?php date("l jS \of F Y h:i:s A"); ?>">
        <script src="../js/script.js? <?php date("l jS \of F Y h:i:s A"); ?>"></script>
        

    </head>
    <body >
        
            <div id="nav">    
                    <nav id="navbar">
                        <div id="logo">
                            <div id="logo-cont" style="background-image: url('../images/logo.png');">
                                
                           </div>
                        </div>
        
                        
                        <div id="btn-menu" ><i class="fas fa-bars"></i></div>
                        <ul id="menu">
                            <li class="menu-item "><a href="../">HOME</a></li>
                            <li class="menu-item active"><a href="">ABOUT DOCTOR</a></li>
                            <li class="menu-item"><a href="./success-stories">SUCCESS STORIES</a></li>
                            <li class="menu-item"><a href="./youtube/">YOUTUBE</a></li>
                            
                        </ul>
                    </nav>
                </div>    
            
        <div class="about-doc-container">

            <?php 
                $q="select * from aboutDoctor where 1";
                $result=mysqli_query($con,$q);
                $row = mysqli_fetch_assoc($result);
                echo'<div class="about-doc-div" style="background-image:url(../images/slider/'.$row['image'].')"></div>';
            
                ?>

            
            <div class="grey-div">
            <?php 
                
                $q="select * from aboutDoctor where 1";
                $result=mysqli_query($con,$q);
                while($row = mysqli_fetch_assoc($result)){
                    echo'<h3>Dr. Waleed Ibrahim </h3>
                        <p>'.$row["paragraph"].'</p>';
                }
                ?>
                <h5 style="color:wheat;">What We Specialize In ..   
                </h5>
                <div id="arrow-down2">
                        <svg width="30" height="14" viewBox="0 0 30 14" xmlns="http://www.w3.org/2000/svg" style="opacity: 1;">
                            <path d="M.215 1.222C.215.977.302.738.46.55.83.106 1.492.046 1.94.415L15.125 11.41 28.316.414c.443-.37 1.106-.31 1.477.135.158.188.244.427.244.672 0 .313-.137.607-.377.806L15.8 13.583c-.19.158-.428.245-.674.245-.245 0-.485-.087-.673-.245L.593 2.028c-.24-.2-.378-.493-.378-.806"
                            fill="#FCF8EE" fill-rule="evenodd"></path>
                        </svg>
                    </div>
            </div>
            <div class="posts-pa-div">
                <div class="posts-great-div">
                    <div class="posts-div">
                        <?php
                            $q="select * from speciality where 1";
                            $result=mysqli_query($con,$q);
                            while($row = mysqli_fetch_assoc($result)){
                            echo'<div class="card"> 
                                    <h3>'.$row["title"].'</h3>
                                    <p> '.$row["paragraph"].'</p>    
                                </div>';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        

        <footer>
            <div class="footer-div">
                <div class="footer-child-div">
                    <div class="icons">
                        <div class="footer-icon-div" id="tw-icon"><a href="https://twitter.com/DrWaleedibrahem"  target="_blink"><i class="fab fa-twitter footer-icon"></i></a></div>
                        <div class="footer-icon-div" id="fb-icon"><a href="https://www.instagram.com/doctor.waleed.ibrahem/" target="_blink"><i class="fab fa-facebook-f footer-icon"></i></a></div>
                        <div class="footer-icon-div"id="insta-icon"><a href="https://www.instagram.com/doctor.waleed.ibrahem/" target="_blink"><i class="fab fa-instagram footer-icon"></i></a></div>
                        <div class="footer-icon-div"id="youtube-icon"><a href=""><i class="fab fa-youtube"></i></a></div>
                        <div class="footer-icon-div" id="messenger-icon"><a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F954541764605431%2F" target="_blink"><i class="fab fa-facebook-messenger"></i></a></div>
                        <div class="footer-icon-div" id="fb-group-icon"><a href="https://www.facebook.com/groups/drwaleedibrahimgroup/?source_id=954541764605431" target="_blink"><i class="fas fa-users"></i></a></div>

                    </div>
                    <div class="footer-title text-muted"><h5 style="margin-left:4%;">Dr's Contacts :</h5>
                        <h5 class="footer-first-text"><span ><img src="../images/pngs/msg.png"></span>&nbsp;<p>wibrahem50@gmail.com</p></h5>
                        <h4 class="footer-first-text" ><span ><img src="../images/pngs/messenger.png"></span>&nbsp;@DoctorWaleedIbrahem</h4>
                        <h4 class="footer-first-text" ><span ><img src="../images/pngs/phone.png"></span>&nbsp;Call 0100 036 7080</h4>
                        <h4 class="footer-first-text"><span ><img src="../images/pngs/timer.png"></span>&nbsp;
                        <select >
                            <option >Monday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17:00 - 20:00</option>
                            <option disabled >Tuesday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</option>
                            <option >Wednesday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13:00 - 16:00</option>
                            <option disabled >Thursday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</option>
                            <option disabled >friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</option>
                            <option >Saturday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17:00 - 20:00</option>
                            <option disabled>Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</option>
                        </select></h4>
                    </div>
                    <div class="footer-title">
                        <h5 class="footer-first-text"><span ><img src="../images/pngs/footer-arrow.png"></span>&nbsp;28 El-Imam Ali, Almazah, Heliopolis,
                            <span style="padding:7px 0px 7px 17px ;display:block"> Cairo Governorate</span>
                            <span style="padding-left:17px;display:block">Cairo, Egypt</span></h5>
                            <div class="mapouter footer-map"><div class="gmap_canvas"><a href="https://www.webdesign-muenchen-pb.de"></a><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=28 El-Imam Ali, Almazah, Heliopolis, Cairo Governorate Cairo, Egypt&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{overflow:hidden;height:auto;width:90%;}.gmap_canvas {background:none!important;height:192px;width:324px;}</style></div>                        </div>
                    <div style="clear:both"></div>
                    <div class="footer-copyrights" >©2018 Nour&Eslam All Rights Reserved.</div>
                </div>
            </div>
        </footer>
    </body>    
</html>
