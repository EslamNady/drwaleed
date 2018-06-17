<?php require_once "./classes/DBclass.php";
 $connect= new connection;
 $con=$connect->connect();
 mysqli_set_charset($con,"utf8");
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="./js/script.js? <?php  ?>"> </script>
        <link rel="icon" sizes="57x57" href="./images/logo.png">
        <link rel="stylesheet" href="./css/main.css? <?php date("l jS \of F Y h:i:s A"); ?>">
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
                    <li class="menu-item active"><a href="">HOME</a></li>
                    <li class="menu-item"><a href="./about-doctor">ABOUT DOCTOR</a></li>
                    <li class="menu-item"><a href="./success-stories">SUCCESS STORIES</a></li>
                    <li class="menu-item"><a href="./youtube/">YOUTUBE</a></li>
                    
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
        <!-- toggle content end -->
        <div id="main-slider">
            <div id="main-slider-cont">
                <?php 
                   
                 $q="select * from sliderImages where 1";
                $result=mysqli_query($con,$q);
               
                $noOfSlides=mysqli_num_rows($result);
        
                $items = array();
                        while($row = mysqli_fetch_assoc($result)){
                            $items[] = $row;
                        }
                        $items = array_reverse($items ,true);
                    
                        foreach($items as $value){
                            $value2=str_replace(" ","%20",$value['path']);
                   echo'<div class="slide" style="background-image: url(./images/slider/'.$value2.'?'.rand().'"></div>';
                }
            
            //slides
                ?>

                <div id="left-slider-btn-cont" onclick= "plusIndex(-1,<?php  echo $noOfSlides ?> )"  class="slider-btn-cont">
                    <div id="left-slider-btn-iner-cont" class="slider-btn-iner-cont">
                        <div class="slider-btn">&#10094;</div>
                    </div>
                </div>
                <div id="right-slider-btn-cont" onclick="plusIndex(1,<?php echo $noOfSlides ?> )"  class="slider-btn-cont">
                    <div id="right-slider-btn-iner-cont" class="slider-btn-iner-cont">
                        <div class="slider-btn">&#10095;</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
        <div id="blue-div" class="blue-div">
            <div id="blue-div-cont">
                <div id="arrow-down">
                <svg width="30" height="14" viewBox="0 0 30 14" xmlns="http://www.w3.org/2000/svg" style="opacity: 1;">
                        <path d="M.215 1.222C.215.977.302.738.46.55.83.106 1.492.046 1.94.415L15.125 11.41 28.316.414c.443-.37 1.106-.31 1.477.135.158.188.244.427.244.672 0 .313-.137.607-.377.806L15.8 13.583c-.19.158-.428.245-.674.245-.245 0-.485-.087-.673-.245L.593 2.028c-.24-.2-.378-.493-.378-.806"
                        fill="#FCF8EE" fill-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- blue div end -->
    <div id="BMI">
            <h3 class="body-titles">BMI Calculator</h3>
            <p class="text-muted">Measure how your weight fits your shape</p>
        <div class="calculator">
                <form class="form">
                    <input type="text" class="calculator-input form-control" id="weight" placeholder="Weight in kg">
                    <input type="text" class="calculator-input form-control" id="height" placeholder="Heght in cm">
                </form>

                <div id="bmi-msg"><div class="msg"></div></div>
            
            <div class="digital-screen">
                <?php 
                    $count=4;
                    while($count!=0){
                        $unit;
                        if($count==4)
                            $unit="hundreds";
                        else if($count==3)
                            $unit="tens";
                        else if($count==2)
                            $unit="units";
                        else if($count==1){
                            echo'<div id="dot"></div>';
                            $unit="decimal";
                        }

                        echo '
                        <div class="number" id="'.$unit.'">
                        <div class="section top"></div>
                        <div class="section top-right"></div>
                        <div class="section top-left"></div>
                        <div class="middle"><div class="section middle-before"></div><div class="section middle-after"></div></div>
                        <div class="section bottom-right"></div>   
                        <div class="section bottom-left"></div>
                        <div class="section bottom"></div>
                    </div>
                        
                        ';
                        $count--;
                        
                    }
                
                ?>
                        
            </div>
            <!-- screen end -->
        </div>
        <!-- calculator end -->
    </div>
     <!-- BMI end -->
     
     

    
    <!-- start stomach imgs div -->
    <div class="grandpa-stomach-div">
    <h3 class="body-titles text-center">Our Surgeries</h3>

            <div class="child-stomach">
                 <div class="child-stomach-div">
                    <div class="child-stomach-img">
                        <div class="stomach-def">
                                <h3 class="body-tit">
                                    Gastric Sleeve<span style="color:rgb(250, 162, 177)">&nbsp;&nbsp;<img src="./images/pngs/care.png"></span>
                                </h3>
                                <p>
                                    Gastric Sleeve is a type of weight loss (bariatric) surgery that renders the stomach smaller. In gastric sleeve surgery, over half of the stomach is removed.
                                    <br/><span><img src="./images/pngs/full-stomach.png"></span>
                                    <span><img src="./images/pngs/pregnant-woman.png"></span>
                                    <span><img src="./images/pngs/finger-of-a-hand-pointing-to-right-direction.png"></span>
                                    <span><img src="./images/pngs/stretching-exercises.png"></span>
                                    
                                </p>
                        </div>
                        <div id="svg1">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 1728 1296" style="enable-background:new 0 0 1728 1296;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:url(#SVGID_1_);}
                                .st1{fill:url(#SVGID_2_);}
                                .st2{fill:url(#SVGID_3_);stroke:url(#SVGID_4_);stroke-miterlimit:10;}
                                .st3{fill:url(#SVGID_5_);stroke:url(#SVGID_6_);stroke-miterlimit:10;}
                                .st4{fill:url(#SVGID_7_);stroke:url(#SVGID_8_);stroke-miterlimit:10;}
                                .st5{fill:url(#SVGID_9_);stroke:url(#SVGID_10_);stroke-miterlimit:10;}
                                .st6{fill:url(#SVGID_11_);stroke:url(#SVGID_12_);stroke-miterlimit:10;}
                                .st7{fill:url(#SVGID_13_);stroke:url(#SVGID_14_);stroke-miterlimit:10;}
                                .st8{fill:url(#SVGID_15_);stroke:url(#SVGID_16_);stroke-miterlimit:10;}
                                .st9{fill:url(#SVGID_17_);stroke:url(#SVGID_18_);stroke-miterlimit:10;}
                                .st10{fill:url(#SVGID_19_);stroke:url(#SVGID_20_);stroke-miterlimit:10;}
                                .st11{fill:url(#SVGID_21_);stroke:url(#SVGID_22_);stroke-miterlimit:10;}
                                .st12{fill:url(#SVGID_23_);stroke:url(#SVGID_24_);stroke-miterlimit:10;}
                                .st13{fill:url(#SVGID_25_);stroke:url(#SVGID_26_);stroke-miterlimit:10;}
                                .st14{fill:url(#SVGID_27_);stroke:url(#SVGID_28_);stroke-miterlimit:10;}
                                .st15{fill:url(#SVGID_29_);stroke:url(#SVGID_30_);stroke-miterlimit:10;}
                                .st16{fill:url(#SVGID_31_);stroke:url(#SVGID_32_);stroke-miterlimit:10;}
                                .st17{fill:url(#SVGID_33_);stroke:url(#SVGID_34_);stroke-miterlimit:10;}
                                .st18{fill:url(#SVGID_35_);stroke:url(#SVGID_36_);stroke-miterlimit:10;}
                                .st19{fill:url(#SVGID_37_);stroke:url(#SVGID_38_);stroke-miterlimit:10;}
                                .st20{fill:url(#SVGID_39_);stroke:url(#SVGID_40_);stroke-miterlimit:10;}
                                .st21{fill:url(#SVGID_41_);stroke:url(#SVGID_42_);stroke-miterlimit:10;}
                                .st22{fill:url(#SVGID_43_);stroke:url(#SVGID_44_);stroke-miterlimit:10;}
                                .st23{fill:url(#SVGID_45_);stroke:url(#SVGID_46_);stroke-miterlimit:10;}
                                .st24{fill:url(#SVGID_47_);stroke:url(#SVGID_48_);stroke-miterlimit:10;}
                                .st25{fill:url(#SVGID_49_);stroke:url(#SVGID_50_);stroke-miterlimit:10;}
                                .st26{fill:url(#SVGID_51_);stroke:url(#SVGID_52_);stroke-miterlimit:10;}
                                .st27{fill:url(#SVGID_53_);stroke:url(#SVGID_54_);stroke-miterlimit:10;}
                                .st28{fill:url(#SVGID_55_);stroke:url(#SVGID_56_);stroke-miterlimit:10;}
                                .st29{fill:url(#SVGID_57_);stroke:url(#SVGID_58_);stroke-miterlimit:10;}
                                .st30{fill:url(#SVGID_59_);stroke:url(#SVGID_60_);stroke-miterlimit:10;}
                                .st31{fill:url(#SVGID_61_);stroke:url(#SVGID_62_);stroke-miterlimit:10;}
                                .st32{fill:url(#SVGID_63_);stroke:url(#SVGID_64_);stroke-miterlimit:10;}
                                .st33{fill:url(#SVGID_65_);stroke:url(#SVGID_66_);stroke-miterlimit:10;}
                                .st34{fill:url(#SVGID_67_);stroke:url(#SVGID_68_);stroke-miterlimit:10;}
                                .st35{fill:url(#SVGID_69_);stroke:url(#SVGID_70_);stroke-miterlimit:10;}
                                .st36{fill:url(#SVGID_71_);stroke:url(#SVGID_72_);stroke-miterlimit:10;}
                                .st37{fill:url(#SVGID_73_);stroke:url(#SVGID_74_);stroke-miterlimit:10;}
                                .st38{fill:url(#SVGID_75_);stroke:url(#SVGID_76_);stroke-miterlimit:10;}
                                .st39{fill:url(#SVGID_77_);stroke:url(#SVGID_78_);stroke-miterlimit:10;}
                                .st40{fill:url(#SVGID_79_);stroke:url(#SVGID_80_);stroke-miterlimit:10;}
                                .st41{fill:url(#SVGID_81_);stroke:url(#SVGID_82_);stroke-miterlimit:10;}
                                .st42{fill:url(#SVGID_83_);stroke:url(#SVGID_84_);stroke-miterlimit:10;}
                                .st43{fill:url(#SVGID_85_);stroke:url(#SVGID_86_);stroke-miterlimit:10;}
                                .st44{fill:url(#SVGID_87_);stroke:url(#SVGID_88_);stroke-miterlimit:10;}
                                .st45{fill:url(#SVGID_89_);stroke:url(#SVGID_90_);stroke-miterlimit:10;}
                                .st46{fill:url(#SVGID_91_);stroke:url(#SVGID_92_);stroke-miterlimit:10;}
                                .st47{fill:url(#SVGID_93_);stroke:url(#SVGID_94_);stroke-miterlimit:10;}
                                .st48{fill:url(#SVGID_95_);stroke:url(#SVGID_96_);stroke-miterlimit:10;}
                                .st49{fill:url(#SVGID_97_);stroke:url(#SVGID_98_);stroke-miterlimit:10;}
                                .st50{fill:url(#SVGID_99_);stroke:url(#SVGID_100_);stroke-miterlimit:10;}
                                .st51{fill:url(#SVGID_101_);stroke:url(#SVGID_102_);stroke-miterlimit:10;}
                                .st52{fill:url(#SVGID_103_);stroke:url(#SVGID_104_);stroke-miterlimit:10;}
                                .st53{fill:url(#SVGID_105_);stroke:url(#SVGID_106_);stroke-miterlimit:10;}
                                .st54{fill:url(#SVGID_107_);stroke:url(#SVGID_108_);stroke-miterlimit:10;}
                                .st55{fill:url(#SVGID_109_);stroke:url(#SVGID_110_);stroke-miterlimit:10;}
                                .st56{fill:url(#SVGID_111_);stroke:url(#SVGID_112_);stroke-miterlimit:10;}
                                .st57{fill:url(#SVGID_113_);stroke:url(#SVGID_114_);stroke-miterlimit:10;}
                                .st58{fill:url(#SVGID_115_);stroke:url(#SVGID_116_);stroke-miterlimit:10;}
                                .st59{fill:url(#SVGID_117_);stroke:url(#SVGID_118_);stroke-miterlimit:10;}
                                .st60{fill:url(#SVGID_119_);stroke:url(#SVGID_120_);stroke-miterlimit:10;}
                                .st61{fill:url(#SVGID_121_);stroke:url(#SVGID_122_);stroke-miterlimit:10;}
                                .st62{fill:url(#SVGID_123_);stroke:url(#SVGID_124_);stroke-miterlimit:10;}
                                .st63{fill:url(#SVGID_125_);stroke:url(#SVGID_126_);stroke-miterlimit:10;}
                                .st64{fill:url(#SVGID_127_);stroke:url(#SVGID_128_);stroke-miterlimit:10;}
                            </style>
                            <g>
                                
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1711.3016" y1="-138.9997" x2="237.2061" y2="277.7008" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                    <stop  offset="0.5297" style="stop-color:#FF90FE"/>
                                    <stop  offset="0.5912" style="stop-color:#FF8BFB"/>
                                    <stop  offset="0.6405" style="stop-color:#FE82F7"/>
                                    <stop  offset="0.6741" style="stop-color:#FE78F5"/>
                                    <stop  offset="0.732" style="stop-color:#FD5CEF"/>
                                    <stop  offset="0.8069" style="stop-color:#FB2FE6"/>
                                    <stop  offset="0.8215" style="stop-color:#FB25E4"/>
                                    <stop  offset="0.8862" style="stop-color:#FB23E4"/>
                                    <stop  offset="0.9081" style="stop-color:#FB1DE3"/>
                                </linearGradient>
                                <path class="st0" d="M776.5,263.4c-0.4,0-0.8,0.1-1.1,0.3C626.2,305.2,470.1,98.1,444.3,62.2c-1.9-2.5-6-2.9-8.3-0.8l-60.6,57.9
                                    c-1.6,1.5-1.5,3.7,0.2,5.3c50.2,47,740.2,701,167,716.5c-0.4,0-0.8-0.1-1.2-0.1c-15.7-2.5-339.6-52.5-378.7,87.1
                                    c-10.8,38.8-30.4,83.3-51,128.2c-0.8,1.8-0.1,3.7,1.9,4.8c37.6,21.9,73.9,45.2,108,70.5c3,2.2,5.7,4.3,8.7,6.5c2.8,2,7,1.3,8.2-1.4
                                    c12.2-26.4,19.9-45.8,21.4-50c0.2-0.5,0.5-1.1,1.2-1.6c167.2-144.6,334.1-11.5,342.7-4.4c0.2,0.2,0.6,0.4,0.8,0.6
                                    c30.9,17.1,61.2,30.1,90.9,39.2c9.3,2.8,149.6,31.5,195.6-9.6c9-8.1,19.6-14.2,30.7-19.1c96.9-42.8,143.2-357,170.3-476.6
                                    c25.4-111.6,41.5-245.3,21.7-330.1c0-0.2-0.1-0.4-0.1-0.5c-7.7-32.5-35.4-56.5-68.7-59.6C944.9,215.6,783.2,263,776.5,263.4z"/>
                                
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="754.3447" y1="192.6691" x2="1649.7029" y2="192.6691" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                    <stop  offset="0.1251" style="stop-color:#FE90FA"/>
                                    <stop  offset="0.3378" style="stop-color:#FE7BF9"/>
                                    <stop  offset="0.6946" style="stop-color:#FC25EB"/>
                                    <stop  offset="0.7233" style="stop-color:#FB1FE5"/>
                                    <stop  offset="0.8081" style="stop-color:#FB1DE3"/>
                                </linearGradient>
                                <path class="st1 hide" d="M1096.4,200.5v0.2c-6.7,0.2-13.6,0.3-20.3,0.5c-24.8,4.7-49,9.9-72.1,15.5c-9.8,2.3-19.1,4.7-28.5,7.2
                                    c-4,1-7.2,3.8-8,7.1l-248,895.4c36.7,15.2,118.2,13.4,118.5,13.1c323.9-52.2,486.4-375.6,507.3-407.3
                                    C1569.8,311.7,1321,198.3,1096.4,200.5z"/>
                                <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1069.8" y1="194.7" x2="1069.8" y2="194.7">
                                    <stop  offset="0" style="stop-color:#000000"/>
                                    <stop  offset="1" style="stop-color:#000000"/>
                                </linearGradient>
                                
                                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="1012.8803" y1="658.6919" x2="1012.8803" y2="658.6919" gradientTransform="matrix(0.9762 0.2169 0.2169 -0.9762 -61.844 618.0212)">
                                    <stop  offset="0" style="stop-color:#000000"/>
                                    <stop  offset="1" style="stop-color:#000000"/>
                                </linearGradient>
                                <path class="st2" d="M1069.8,194.7"/>
                                <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="808.9" y1="1134.5" x2="808.9" y2="1134.5">
                                    <stop  offset="0" style="stop-color:#000000"/>
                                    <stop  offset="1" style="stop-color:#000000"/>
                                </linearGradient>
                                
                                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="962.033" y1="-315.3184" x2="962.033" y2="-315.3184" gradientTransform="matrix(0.9762 0.2169 0.2169 -0.9762 -61.844 618.0212)">
                                    <stop  offset="0" style="stop-color:#000000"/>
                                    <stop  offset="1" style="stop-color:#000000"/>
                                </linearGradient>
                                <path class="st3" d="M808.9,1134.5"/>
                            </g>
                            <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="1023.6" y1="237.9" x2="1071.1" y2="237.9">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="1012.7438" y1="633.0289" x2="1057.6696" y2="626.4626" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st4 hideline" x1="1071.1" y1="235.4" x2="1023.6" y2="240.4"/>
                            <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="1047.3" y1="261.55" x2="1091.6" y2="261.55">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="1037.9877" y1="610.8533" x2="1079.9701" y2="604.7173" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st5 hideline" x1="1091.6" y1="259.2" x2="1047.3" y2="263.9"/>
                            <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="1051.6" y1="287.1" x2="1089.6" y2="287.1">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="1043.8951" y1="585.0359" x2="1079.9753" y2="579.7621" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st6 hideline" x1="1089.6" y1="285.1" x2="1051.6" y2="289.1"/>
                            <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="1065.6" y1="312.3" x2="1097.6" y2="312.3">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="1059.5813" y1="560.2943" x2="1090.2714" y2="555.8083" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st7 hideline" x1="1097.6" y1="310.6" x2="1065.6" y2="314"/>
                            <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="1077.8" y1="337.35" x2="1099.3" y2="337.35">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="1073.4769" y1="535.0742" x2="1093.9813" y2="532.0771" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st8 hideline" x1="1099.3" y1="336.2" x2="1077.8" y2="338.5"/>
                            <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="1063.7" y1="338.05" x2="1099.3" y2="338.05">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="1059.9191" y1="534.8193" x2="1093.6863" y2="529.8839" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st9 hideline" x1="1099.3" y1="336.2" x2="1063.7" y2="339.9"/>
                            <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="1076" y1="362.65" x2="1097.4" y2="362.65">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="1073.4821" y1="509.7083" x2="1093.9753" y2="506.7126" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st10 hideline" x1="1097.4" y1="361.5" x2="1076" y2="363.8"/>
                            <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="1067.9" y1="363.05" x2="1097.4" y2="363.05">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="1065.7235" y1="509.5596" x2="1093.8175" y2="505.4529" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st11 hideline" x1="1097.4" y1="361.5" x2="1067.9" y2="364.6"/>
                            <linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="1071.2" y1="381.4" x2="1102.3" y2="381.4">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="1070.1903" y1="491.7026" x2="1100.0924" y2="487.3318" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st12 hideline" x1="1102.3" y1="379.9" x2="1071.2" y2="382.9"/>
                            <linearGradient id="SVGID_25_" gradientUnits="userSpaceOnUse" x1="1067.4" y1="418" x2="1106.5" y2="418">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="1069.537" y1="455.7341" x2="1106.6852" y2="450.3047" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st13 hideline" x1="1106.5" y1="416.1" x2="1067.4" y2="419.9"/>
                            <linearGradient id="SVGID_27_" gradientUnits="userSpaceOnUse" x1="1069.8" y1="434.55" x2="1105.3" y2="434.55">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="1072.9908" y1="439.0335" x2="1106.7587" y2="434.0981" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st14 hideline" x1="1105.3" y1="432.7" x2="1069.8" y2="436.4"/>
                            <linearGradient id="SVGID_29_" gradientUnits="userSpaceOnUse" x1="1073.1" y1="450.9" x2="1104.1" y2="450.9">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="1077.3486" y1="422.4967" x2="1106.871" y2="418.182" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st15 hideline" x1="1104.1" y1="449.4" x2="1073.1" y2="452.4"/>
                            <linearGradient id="SVGID_31_" gradientUnits="userSpaceOnUse" x1="1070.1" y1="467.7" x2="1102.9" y2="467.7">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_32_" gradientUnits="userSpaceOnUse" x1="1075.6306" y1="405.7134" x2="1106.8251" y2="401.1543" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st16 hideline" x1="1102.9" y1="466" x2="1070.1" y2="469.4"/>
                            <linearGradient id="SVGID_33_" gradientUnits="userSpaceOnUse" x1="1071.2" y1="484.3" x2="1101.6" y2="484.3">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_34_" gradientUnits="userSpaceOnUse" x1="1077.9398" y1="388.9774" x2="1106.8578" y2="384.7507" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st17 hideline" x1="1101.6" y1="482.7" x2="1071.2" y2="485.9"/>
                            <linearGradient id="SVGID_35_" gradientUnits="userSpaceOnUse" x1="1079" y1="500.45" x2="1100.4" y2="500.45">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_36_" gradientUnits="userSpaceOnUse" x1="1086.5612" y1="372.5082" x2="1107.0889" y2="369.5079" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st18 hideline" x1="1100.4" y1="499.4" x2="1079" y2="501.5"/>
                            <linearGradient id="SVGID_37_" gradientUnits="userSpaceOnUse" x1="1071.1" y1="501.4" x2="1105" y2="501.4">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_38_" gradientUnits="userSpaceOnUse" x1="1078.9414" y1="372.3228" x2="1111.4425" y2="367.5725" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st19 hideline" x1="1105" y1="499.7" x2="1071.1" y2="503.1"/>
                            <linearGradient id="SVGID_39_" gradientUnits="userSpaceOnUse" x1="1069.9" y1="518.1" x2="1103.8" y2="518.1">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_40_" gradientUnits="userSpaceOnUse" x1="1078.9501" y1="355.5831" x2="1111.4386" y2="350.8347" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st20 hideline" x1="1103.8" y1="516.3" x2="1069.9" y2="519.9"/>
                            <linearGradient id="SVGID_41_" gradientUnits="userSpaceOnUse" x1="1070.8" y1="534.5" x2="1102.5" y2="534.5">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="1080.9812" y1="339.0632" x2="1111.4999" y2="334.6024" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st21 hideline" x1="1102.5" y1="533" x2="1070.8" y2="536"/>
                            <linearGradient id="SVGID_43_" gradientUnits="userSpaceOnUse" x1="1067.5" y1="550.8" x2="1097.2" y2="550.8">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="1078.8815" y1="322.3465" x2="1107.3737" y2="318.1819" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st22 hideline" x1="1097.2" y1="549.2" x2="1067.5" y2="552.4"/>
                            <linearGradient id="SVGID_45_" gradientUnits="userSpaceOnUse" x1="1060.8" y1="567.6" x2="1095.5" y2="567.6">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_46_" gradientUnits="userSpaceOnUse" x1="1073.8035" y1="305.5939" x2="1106.7921" y2="300.772" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st23 hideline" x1="1095.5" y1="565.9" x2="1060.8" y2="569.3"/>
                            <linearGradient id="SVGID_47_" gradientUnits="userSpaceOnUse" x1="1058.7" y1="584.4" x2="1094.3" y2="584.4">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_48_" gradientUnits="userSpaceOnUse" x1="1072.9664" y1="288.7805" x2="1106.7473" y2="283.8427" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st24 hideline" x1="1094.3" y1="582.7" x2="1058.7" y2="586.1"/>
                            <linearGradient id="SVGID_49_" gradientUnits="userSpaceOnUse" x1="1057" y1="601.25" x2="1093.1" y2="601.25">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_50_" gradientUnits="userSpaceOnUse" x1="1072.6" y1="271.8928" x2="1106.7198" y2="266.9055" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st25 hideline" x1="1093.1" y1="599.2" x2="1057" y2="603.3"/>
                            <linearGradient id="SVGID_51_" gradientUnits="userSpaceOnUse" x1="1054" y1="614.95" x2="1089.1" y2="614.95">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_52_" gradientUnits="userSpaceOnUse" x1="1070.2659" y1="257.9506" x2="1103.9666" y2="253.025" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st26 hideline" x1="1089.1" y1="613.2" x2="1054" y2="616.7"/>
                            <linearGradient id="SVGID_53_" gradientUnits="userSpaceOnUse" x1="1049.5" y1="630.45" x2="1079.4" y2="630.45">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_54_" gradientUnits="userSpaceOnUse" x1="1066.8828" y1="241.5968" x2="1095.3156" y2="237.4411" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st27 hideline" x1="1079.4" y1="629" x2="1049.5" y2="631.9"/>
                            <linearGradient id="SVGID_55_" gradientUnits="userSpaceOnUse" x1="1048.6" y1="642.85" x2="1082" y2="642.85">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_56_" gradientUnits="userSpaceOnUse" x1="1066.8812" y1="229.5503" x2="1098.9825" y2="224.8583" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st28 hideline" x1="1082" y1="641.2" x2="1048.6" y2="644.5"/>
                            <linearGradient id="SVGID_57_" gradientUnits="userSpaceOnUse" x1="1042.7" y1="657.25" x2="1077" y2="657.25">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_58_" gradientUnits="userSpaceOnUse" x1="1062.0809" y1="214.8505" x2="1094.9692" y2="210.0437" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st29 hideline" x1="1077" y1="655.4" x2="1042.7" y2="659.1"/>
                            <linearGradient id="SVGID_59_" gradientUnits="userSpaceOnUse" x1="1035.2" y1="669.75" x2="1066.8" y2="669.75">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_60_" gradientUnits="userSpaceOnUse" x1="1055.7195" y1="201.5081" x2="1085.7369" y2="197.1206" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st30 hideline" x1="1066.8" y1="668.2" x2="1035.2" y2="671.3"/>
                            <linearGradient id="SVGID_61_" gradientUnits="userSpaceOnUse" x1="1032.4" y1="689" x2="1066.9" y2="689">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_62_" gradientUnits="userSpaceOnUse" x1="1054.1401" y1="182.4521" x2="1087.2759" y2="177.6086" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st31 hideline" x1="1066.9" y1="687.2" x2="1032.4" y2="690.8"/>
                            <linearGradient id="SVGID_63_" gradientUnits="userSpaceOnUse" x1="1028.4" y1="706.85" x2="1060.6" y2="706.85">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_64_" gradientUnits="userSpaceOnUse" x1="1051.5322" y1="164.0939" x2="1082.1326" y2="159.6215" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st32 hideline" x1="1060.6" y1="705.2" x2="1028.4" y2="708.5"/>
                            <linearGradient id="SVGID_65_" gradientUnits="userSpaceOnUse" x1="1021.8" y1="723.2" x2="1054" y2="723.2">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_66_" gradientUnits="userSpaceOnUse" x1="1046.0537" y1="147.3175" x2="1076.9435" y2="142.8026" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st33 hideline" x1="1054" y1="721.5" x2="1021.8" y2="724.9"/>
                            <linearGradient id="SVGID_67_" gradientUnits="userSpaceOnUse" x1="1015.4" y1="739" x2="1044" y2="739">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_68_" gradientUnits="userSpaceOnUse" x1="1040.7821" y1="130.7025" x2="1068.2847" y2="126.6828" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st34 hideline" x1="1044" y1="737.6" x2="1015.4" y2="740.4"/>
                            <linearGradient id="SVGID_69_" gradientUnits="userSpaceOnUse" x1="1014.3" y1="755.1" x2="1045.2" y2="755.1">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_70_" gradientUnits="userSpaceOnUse" x1="1040.9855" y1="114.8005" x2="1070.2954" y2="110.5163" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st35 hideline" x1="1045.2" y1="753.5" x2="1014.3" y2="756.7"/>
                            <linearGradient id="SVGID_71_" gradientUnits="userSpaceOnUse" x1="1006.8" y1="773.95" x2="1037.9" y2="773.95">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_72_" gradientUnits="userSpaceOnUse" x1="1034.8065" y1="95.4846" x2="1064.7085" y2="91.1139" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st36 hideline" x1="1037.9" y1="772.4" x2="1006.8" y2="775.5"/>
                            <linearGradient id="SVGID_73_" gradientUnits="userSpaceOnUse" x1="995.5" y1="800.45" x2="1024.9" y2="800.45">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_74_" gradientUnits="userSpaceOnUse" x1="1025.3707" y1="68.0561" x2="1053.6733" y2="63.9193" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st37 hideline" x1="1024.9" y1="799" x2="995.5" y2="801.9"/>
                            <linearGradient id="SVGID_75_" gradientUnits="userSpaceOnUse" x1="1000.1" y1="788.55" x2="1028.9" y2="788.55">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_76_" gradientUnits="userSpaceOnUse" x1="1029.1523" y1="80.186" x2="1056.6221" y2="76.1712" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st38 hideline" x1="1028.9" y1="787" x2="1000.1" y2="790.1"/>
                            <linearGradient id="SVGID_77_" gradientUnits="userSpaceOnUse" x1="987.3" y1="813.95" x2="1022.2" y2="813.95">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_78_" gradientUnits="userSpaceOnUse" x1="1018.3989" y1="54.5619" x2="1051.8186" y2="49.6769" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st39 hideline" x1="1022.2" y1="812.1" x2="987.3" y2="815.8"/>
                            <linearGradient id="SVGID_79_" gradientUnits="userSpaceOnUse" x1="982.4" y1="827.35" x2="1015.9" y2="827.35">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_80_" gradientUnits="userSpaceOnUse" x1="1014.6363" y1="40.6641" x2="1046.449" y2="36.0143" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st40 hideline" x1="1015.9" y1="825.6" x2="982.4" y2="829.1"/>
                            <linearGradient id="SVGID_81_" gradientUnits="userSpaceOnUse" x1="988.7" y1="838.25" x2="1020.7" y2="838.25">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_82_" gradientUnits="userSpaceOnUse" x1="1021.6527" y1="30.1019" x2="1052.0663" y2="25.657" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st41 hideline" x1="1020.7" y1="836.7" x2="988.7" y2="839.8"/>
                            <linearGradient id="SVGID_83_" gradientUnits="userSpaceOnUse" x1="981.5" y1="852" x2="1012.4" y2="852">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_84_" gradientUnits="userSpaceOnUse" x1="1015.4641" y1="15.7425" x2="1044.8871" y2="11.4416" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st42 hideline" x1="1012.4" y1="850.5" x2="981.5" y2="853.5"/>
                            <linearGradient id="SVGID_85_" gradientUnits="userSpaceOnUse" x1="971.3" y1="865.5" x2="1004.1" y2="865.5">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_86_" gradientUnits="userSpaceOnUse" x1="1006.3884" y1="1.7222" x2="1037.594" y2="-2.8389" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st43 hideline" x1="1004.1" y1="863.9" x2="971.3" y2="867.1"/>
                            <linearGradient id="SVGID_87_" gradientUnits="userSpaceOnUse" x1="971.8" y1="880.6" x2="1000.8" y2="880.6">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_88_" gradientUnits="userSpaceOnUse" x1="1007.9092" y1="-13.704" x2="1035.4282" y2="-17.7261" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st44 hideline" x1="1000.8" y1="879.1" x2="971.8" y2="882.1"/>
                            <linearGradient id="SVGID_89_" gradientUnits="userSpaceOnUse" x1="958" y1="894.6" x2="992.3" y2="894.6">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_90_" gradientUnits="userSpaceOnUse" x1="995.0389" y1="-28.0793" x2="1027.9399" y2="-32.8882" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st45 hideline" x1="992.3" y1="892.9" x2="958" y2="896.3"/>
                            <linearGradient id="SVGID_91_" gradientUnits="userSpaceOnUse" x1="961.7" y1="906.75" x2="989.4" y2="906.75">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_92_" gradientUnits="userSpaceOnUse" x1="999.574" y1="-40.641" x2="1025.9266" y2="-44.4927" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st46 hideline" x1="989.4" y1="905.4" x2="961.7" y2="908.1"/>
                            <linearGradient id="SVGID_93_" gradientUnits="userSpaceOnUse" x1="954.6" y1="924" x2="989.5" y2="924">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_94_" gradientUnits="userSpaceOnUse" x1="993.9493" y1="-57.6042" x2="1027.1357" y2="-62.4548" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st47 hideline" x1="989.5" y1="922.3" x2="954.6" y2="925.7"/>
                            <linearGradient id="SVGID_95_" gradientUnits="userSpaceOnUse" x1="958" y1="937.6" x2="985.5" y2="937.6">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_96_" gradientUnits="userSpaceOnUse" x1="998.0661" y1="-71.6886" x2="1024.5597" y2="-75.5612" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st48 hideline" x1="985.5" y1="936.1" x2="958" y2="939.1"/>
                            <linearGradient id="SVGID_97_" gradientUnits="userSpaceOnUse" x1="948.2" y1="951.35" x2="978.5" y2="951.35">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_98_" gradientUnits="userSpaceOnUse" x1="989.5318" y1="-85.8484" x2="1018.3503" y2="-90.0603" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st49 hideline" x1="978.5" y1="949.8" x2="948.2" y2="952.9"/>
                            <linearGradient id="SVGID_99_" gradientUnits="userSpaceOnUse" x1="941.2" y1="964.15" x2="973.2" y2="964.15">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_100_" gradientUnits="userSpaceOnUse" x1="983.478" y1="-98.9397" x2="1013.8956" y2="-103.3856" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st50 hideline" x1="973.2" y1="962.5" x2="941.2" y2="965.8"/>
                            <linearGradient id="SVGID_101_" gradientUnits="userSpaceOnUse" x1="935.2" y1="972.3" x2="962.1" y2="972.3">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_102_" gradientUnits="userSpaceOnUse" x1="977.8917" y1="-108.0382" x2="1003.543" y2="-111.7877" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st51 hideline" x1="962.1" y1="970.9" x2="935.2" y2="973.7"/>
                            <linearGradient id="SVGID_103_" gradientUnits="userSpaceOnUse" x1="933.4" y1="988.4" x2="962.2" y2="988.4">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_104_" gradientUnits="userSpaceOnUse" x1="977.3411" y1="-124.0276" x2="1004.827" y2="-128.045" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st52 hideline" x1="962.2" y1="987" x2="933.4" y2="989.8"/>
                            <linearGradient id="SVGID_105_" gradientUnits="userSpaceOnUse" x1="924" y1="1003.55" x2="951.5" y2="1003.55">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_106_" gradientUnits="userSpaceOnUse" x1="969.1527" y1="-139.9805" x2="995.3549" y2="-143.8105" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st53 hideline" x1="951.5" y1="1002.1" x2="924" y2="1005"/>
                            <linearGradient id="SVGID_107_" gradientUnits="userSpaceOnUse" x1="909.9" y1="1018.65" x2="942.1" y2="1018.65">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_108_" gradientUnits="userSpaceOnUse" x1="956.2247" y1="-155.5642" x2="986.8251" y2="-160.0371" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st54 hideline" x1="942.1" y1="1017" x2="909.9" y2="1020.3"/>
                            <linearGradient id="SVGID_109_" gradientUnits="userSpaceOnUse" x1="898.4" y1="1035.7" x2="927.8" y2="1035.7">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_110_" gradientUnits="userSpaceOnUse" x1="945.9626" y1="-173.7135" x2="973.9993" y2="-177.8116" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st55 hideline" x1="927.8" y1="1034.3" x2="898.4" y2="1037.1"/>
                            <linearGradient id="SVGID_111_" gradientUnits="userSpaceOnUse" x1="893.6" y1="1047.8501" x2="921.2" y2="1047.8501">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_112_" gradientUnits="userSpaceOnUse" x1="942.1357" y1="-186.3908" x2="968.3812" y2="-190.2266" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st56 hideline" x1="921.2" y1="1046.4" x2="893.6" y2="1049.3"/>
                            <linearGradient id="SVGID_113_" gradientUnits="userSpaceOnUse" x1="883.8" y1="1065.05" x2="905.2" y2="1065.05">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_114_" gradientUnits="userSpaceOnUse" x1="933.4262" y1="-204.9148" x2="953.9539" y2="-207.9152" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st57 hideline" x1="905.2" y1="1064" x2="883.8" y2="1066.1"/>
                            <linearGradient id="SVGID_115_" gradientUnits="userSpaceOnUse" x1="874" y1="1076.5" x2="895.4" y2="1076.5">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_116_" gradientUnits="userSpaceOnUse" x1="924.3776" y1="-217.037" x2="944.8873" y2="-220.0348" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st58 hideline" x1="895.4" y1="1075.5" x2="874" y2="1077.5"/>
                            <linearGradient id="SVGID_117_" gradientUnits="userSpaceOnUse" x1="858.8" y1="1093.3" x2="887.4" y2="1093.3">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_118_" gradientUnits="userSpaceOnUse" x1="910.8405" y1="-234.176" x2="938.0758" y2="-238.1567" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st59 hideline" x1="887.4" y1="1091.8" x2="858.8" y2="1094.8"/>
                            <linearGradient id="SVGID_119_" gradientUnits="userSpaceOnUse" x1="854.5" y1="1106.65" x2="878.9" y2="1106.65">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_120_" gradientUnits="userSpaceOnUse" x1="907.2827" y1="-248.2296" x2="930.559" y2="-251.6319" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st60 hideline" x1="878.9" y1="1105.4" x2="854.5" y2="1107.9"/>
                            <linearGradient id="SVGID_121_" gradientUnits="userSpaceOnUse" x1="837.6" y1="1114.4" x2="866.2" y2="1114.4">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_122_" gradientUnits="userSpaceOnUse" x1="890.9907" y1="-256.7394" x2="918.4934" y2="-260.7592" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <line class="st61 hideline" x1="866.2" y1="1113" x2="837.6" y2="1115.8"/>
                            <linearGradient id="SVGID_123_" gradientUnits="userSpaceOnUse" x1="835" y1="1128.8" x2="835" y2="1128.8">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_124_" gradientUnits="userSpaceOnUse" x1="888.9685" y1="-274.3557" x2="888.9685" y2="-274.3557" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <path class="st62" d="M835,1128.8"/>
                            <linearGradient id="SVGID_125_" gradientUnits="userSpaceOnUse" x1="786.6" y1="1133.05" x2="808.1" y2="1133.05">
                                <stop  offset="0" style="stop-color:#000000"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_126_" gradientUnits="userSpaceOnUse" x1="841.5009" y1="-279.8661" x2="862.0054" y2="-282.8631" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#FFFFFF"/>
                                <stop  offset="1" style="stop-color:#FB89E3"/>
                            </linearGradient>
                            <line class="st63 hideline" x1="808.1" y1="1131.9" x2="786.6" y2="1134.2"/>
                            <linearGradient id="SVGID_127_" gradientUnits="userSpaceOnUse" x1="1069.7" y1="401.05" x2="1104.9" y2="401.05">
                                <stop  offset="0" style="stop-color:#FFFFFF"/>
                                <stop  offset="1" style="stop-color:#000000"/>
                            </linearGradient>
                            <linearGradient id="SVGID_128_" gradientUnits="userSpaceOnUse" x1="1070.2798" y1="472.4244" x2="1103.967" y2="467.5005" gradientTransform="matrix(0.9973 7.350577e-02 7.350577e-02 -0.9973 -31.4016 789.8408)">
                                <stop  offset="0" style="stop-color:#FFFFFF"/>
                                <stop  offset="1" style="stop-color:#FB89E3"/>
                            </linearGradient>
                            <line class="st64 hideline" x1="1104.9" y1="399.2" x2="1069.7" y2="402.9"/>
                            </svg>

                        </div>
                    </div>
                    <div class="child-stomach-img">

                        <div class="stomach-def">
                            <h3 class="body-tit">
                                Gastric Bypass<span style="color:rgb(250, 162, 177)">&nbsp;&nbsp;<img src="./images/pngs/care.png"></span>
                            </h3>
                                <p>
                                        Gastric Bypass is a surgery that helps you lose weight by changing how your stomach and small intestine handle the food you eat.
                                        After the surgery, your stomach will be smaller. You will feel full with less food.
                                        <br/><span><img src="./images/pngs/no-burger.png"></span>
                                        <span><img src="./images/pngs/diet.png"></span>
                                        <span><img src="./images/pngs/slim-down.png"></span>
                                        
                                </p>
                        </div>
                        <div id="svg2">
                                <img src="./images/stomach/stomach3.svg">
                                                                                             
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- end stomach imgs div -->

    <!-- media work start -->

     <div id="media">
         <h3 class="body-titles">Latest Videos</h3>
        <div id="media-cont">
            <?php
                $con=mysqli_connect("localhost","root","","drwaleeddb");
                $q="select * from youtubevideos where 1";
                $result=mysqli_query($con,$q);
                $items = array();
                while($row = mysqli_fetch_assoc($result)){
                    $items[] = $row;
                }
                $items = array_reverse($items ,true);
                $i=0;
                foreach($items as $value){
                    $temp=substr($value['video'],0,7).' class="video-item" '.substr($value['video'],8,strlen($value['video']));
                    echo'<div class="videos-cont parallex-video">'.$temp.'</div>';
                    $i++;
                    if($i==3){
                        break;
                    }
                }
            
            ?>
            <div class="show-more-div">
                <a href="./youtube/" class="btn btn-outline-primary btn-block">More Videos</a>
            </div>
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
                        <div class="footer-icon-div" id="tw-icon"><span><i class="fab fa-twitter footer-icon"></i></span></div>
                        <div class="footer-icon-div" id="fb-icon"><span><i class="fab fa-facebook-f footer-icon"></i></span></div>
                        <div class="footer-icon-div"id="insta-icon"><span><i class="fab fa-instagram footer-icon"></i></span></div>
                    </div>
                    <div class="footer-title text-muted"><h5 style="margin-left:4%;">Dr's Contacts :</h5>
                        <h5 class="footer-first-text"><span ><img src="./images/pngs/msg.png"></span>&nbsp;<p>wibrahem50@gmail.com</p></h5>
                        <h4 class="footer-first-text" ><span ><img src="./images/pngs/messenger.png"></span>&nbsp;@DoctorWaleedIbrahem</h4>
                        <h4 class="footer-first-text" ><span ><img src="./images/pngs/phone.png"></span>&nbsp;Call 0100 036 7080</h4>
                        <h4 class="footer-first-text"><span ><img src="./images/pngs/timer.png"></span>&nbsp;
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
                        <h5 class="footer-first-text"><span ><img src="./images/pngs/footer-arrow.png"></span>&nbsp;28 El-Imam Ali, Almazah, Heliopolis,
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