<?php require_once "../classes/DBclass.php";
 $connect= new connection;
 $con=$connect->connect();
 mysqli_set_charset($con,"utf8");
?>
<!DOCTYPE HTML >
<html>
    <head>


        <title>Drwaleed|Success stories</title>
        <link rel="stylesheet" href="../css/main.css?<?php echo'date("l jS \of F Y h:i:s A");'?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <script src="../js/script.js?<?php echo'date("l jS \of F Y h:i:s A");'?>"></script>
        <link rel="icon" sizes="57x57" href="../images/logo.png">
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
                    <li class="menu-item "><a href="../">HOME</a></li>
                    <li class="menu-item"><a href="../about-doctor/">ABOUT DOCTOR</a></li>
                    <li class="menu-item active"><a href="./">SUCCESS STORIES</a></li>
                    <li class="menu-item"><a href="../youtube/">YOUTUBE</a></li>
                    
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
        
        <?php
        
        
        $q="select * from stories where 1";
        $result=mysqli_query($con,$q);
        if($result){
            echo'<div class="card-container" ><div class="rotate-card-div">
            <div class="rotate-centered-div" >';
        while( $value=mysqli_fetch_assoc($result)){
            $front=str_replace(" ","%20",$value['frontImg']);
            $back=str_replace(" ","%20",$value['backImg']);
        echo'
        <div class="rotate-card  mt-4 " style="display:inline-block;">
                    <div class="rotate-container">
                        <div  class="card card-front text-center">
                           
                            <div class="card-background text-center img-great-div ">
                                <div class="img-white-bg">
                                    <div class="img-div"><img src="../images/stories/'.$front.'"></div>
                                </div>
                            </div>
                            
                            <div class="card-block text-center">
                                <h3 class="card-title">'.$value["storyName"].'</h3>
                            </div>

                        </div>
                        <div class="card card-back ">
                            <div class="card-background text-center img-great-div ">
                                <div class="img-white-bg">
                                    <div class="img-div"><img src="../images/stories/'.$back.'"></div>
                                </div>
                            </div>
                            <div class="card-block text-center">   
                                <button type="button" class="btn btn-block story-btn" value="'.$value["id"].'"  data-toggle="modal" data-target="#myModal">
                                 Read Full Story &nbsp;<span class="bookImg"><img src="../images/pngs/open-book.png"></span></button>                        
                            </div> 
                                <p class="img'.$value["id"].'" style="display:none;">'.$back.'</p>
                                <p class="enstory'.$value["id"].'" style="display:none;" >'.$value["enDesc"].'</p>
                                <p class="arstory'.$value["id"].' " lang="ar" dir="rtl" style="display:none;">'.$value["arDesc"].'</p>
                                
 
                        </div>
                    </div>
            </div>';
        }
        echo'</div></div></div>';

    }
            ?>


            <div class="container-modal">
                <!-- Button to Open the Modal -->

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <!-- Modal body -->
                            <div class="modal-body" >
                                <div class="media">
                                    <div class="modal-img-great-div ">
                                        <div class="modal-img-white-bg">
                                            <div class="modal-img-div">
                                                <img class="imgs-modal img-responsive pull-left" src="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body" >
                                        <p class="text-muted modal-para mt-3 " > </p>
                                        <button type="button" class="btn btn-block artranslate" dir="rtl" lang="ar" > عربي &nbsp;<span class="book-img"><img src="../images/pngs/open-book.png"></span></button>                 
                                        <button type="button hide" class="btn btn-block entranslate" style="display:none;" > English &nbsp;<span class="book-img"><img src="../images/pngs/open-book.png"></span></button>                 

                                    </div>
                                </div>             
                            </div>
                                
                            <!-- Modal footer -->
                            
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
    <!-- <p class="text-muted" dir='rtl' lang='ar'> محمد قام بأجرائها و نزل 60 كيلوجرام ووصل للوزن المثالى بعد 7 أشهر من عملية تكميم المعدة بالمنظار بواسطة د. محمود زكريا.
                                        حيث ان عملية تكميم المعدة من العمليات المشهورة فى مجال طب جراحة السمنة حيث انها تعمل على تصغير حجم المعدة بشكل كبير جدا مما يعنى تناول الطعام بكميات قليلة جدا وبالتالى انقاص الوزن فى اسرع وقت ممكن.عملية تكميم المعدة بالمنظار  .</p>
                                <p class="text-muted" >Mohamed lost 60 kg, and ideal weight after 7 months of laparoscopic gastric hemorrhage by Dr. Mahmoud Zakaria.
                                        As the process of quantification of the stomach of the famous operations in the field of surgery, obesity, as it works to reduce the size of the stomach very much, which means eating very small quantities and thus lose weight as soon as possible. </p>
                                 -->

                                <!-- <p class="text-muted" dir='rtl' lang='ar'> محمد قام بأجرائها و نزل 60 كيلوجرام ووصل للوزن المثالى بعد 7 أشهر من عملية تكميم المعدة بالمنظار بواسطة د. محمود زكريا.
                                            حيث ان عملية تكميم المعدة من العمليات المشهورة فى مجال طب جراحة السمنة حيث انها تعمل على تصغير حجم المعدة بشكل كبير جدا مما يعنى تناول الطعام بكميات قليلة جدا وبالتالى انقاص الوزن فى اسرع وقت ممكن.عملية تكميم المعدة بالمنظار  .</p>
                                    <p class="text-muted" >Mohamed lost 60 kg, and ideal weight after 7 months of laparoscopic gastric hemorrhage by Dr. Mahmoud Zakaria.
                                            As the process of quantification of the stomach of the famous operations in the field of surgery, obesity, as it works to reduce the size of the stomach very much, which means eating very small quantities and thus lose weight as soon as possible. </p>
                                 -->
</html>
