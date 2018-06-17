<?php require_once "../classes/DBclass.php";
 $connect= new connection;
 $con=$connect->connect();
 mysqli_set_charset($con,"utf8");
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Drwaleed|Youtube</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="../js/script.js?  <?php date("l jS \of F Y h:i:s A"); ?>"> </script>
        <link rel="icon" sizes="57x57" href="../images/logo.png">
        <link rel="stylesheet" href="../css/main.css?  <?php date("l jS \of F Y h:i:s A"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'> -->
    </head>

    <body>
        <div id="social-networks">
            <div  id="social-networks-cont">
                <div class="social-content" id="social-swip-btn-div">
                    <svg id="social-swip-btn"  width="30" height="14" viewBox="0 0 30 14" xmlns="http://www.w3.org/2000/svg" style="opacity: 1;">
                        <path d="M.215 1.222C.215.977.302.738.46.55.83.106 1.492.046 1.94.415L15.125 11.41 28.316.414c.443-.37 1.106-.31 1.477.135.158.188.244.427.244.672 0 .313-.137.607-.377.806L15.8 13.583c-.19.158-.428.245-.674.245-.245 0-.485-.087-.673-.245L.593 2.028c-.24-.2-.378-.493-.378-.806"
                        fill="#FCF8EE" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="social-content icon" id="fb"><a href="#" target="_blink"><i class="fab fa-facebook-square fa-2x"></i></a></div>
                <div class="social-content icon" id="insta"><a href="#" target="_blink"><i class="fab fa-instagram fa-2x"></i></a></div>
                <div class="social-content icon" id="twitter"><a href="#" target="_blink"><i class="fab fa-twitter-square fa-2x"></i></a></div>
            </div>
        </div>
    <div id="nav">    
            <nav id="navbar">
                <div id="logo">
                    <div id="logo-cont">
                        
                   </div>
                </div>

                
                <div id="btn-menu" ><i class="fas fa-bars"></i></div>
                <ul id="menu">
                    <li class="menu-item"><a href="../">HOME</a></li>
                    <li class="menu-item"><a href="">ABOUT DOCTOR</a></li>
                    <li class="menu-item"><a href="../success-stories/">SUCCESS STORIES</a></li>
                    <li class="menu-item active"><a href="">YOUTUBE</a></li>
                    
                </ul>
            </nav>
        </div>    
        <!-- nav end -->
        <div id="toggle-content"  style="font-family: 'Bank Gothic', 'Futura', 'Arial'">
             <ul id="menu-toggle">
                <li class="menu-item-toggle"><span>Home</span></li>
                <li class="menu-item-toggle"><span>ABOUT DOCTOR</span></li>
                <li class="menu-item-toggle"><span>SUCCESS STORIES</span></li>
                <li class="menu-item"><span>YOUTUBE</span></li>
                
            </ul>
        </div>

        <div id="media">
         <h3 style="margin-top:140px" class="body-titles">Media</h3>
        <div id="media-cont">
            <?php
                
                $q="select * from youtubevideos where 1";
                $result=mysqli_query($con,$q);
                $items = array();
                while($row = mysqli_fetch_assoc($result)){
                    $items[] = $row;
                }
                $items = array_reverse($items ,true);
                foreach($items as $value){
                    $temp=substr($value['video'],0,7).' class="video-item" '.substr($value['video'],8,strlen($value['video']));
                    echo'<div class="videos-cont parallex-video animate-video-onload">'.$temp.'</div>';
                }
            
            ?>
          <!-- <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/rzWCaQTQ5Jg" frameborder="0"></iframe></div>
          <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/JCZlEgXyT0Q" frameborder="0" ></iframe></div>
          <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/zg9RwFmNRVk" frameborder="0"></iframe></div>
          <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/JO9tJTPlisU" frameborder="0" ></iframe></div>
          <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/GLaHzkcHj6w" frameborder="0"></iframe></div>
          <div class="videos-cont parallex-video"><iframe class="video-item"  src="https://www.youtube.com/embed/h46mlUHbYtY" frameborder="0"></iframe></div> -->
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

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </body>
</html>