<?php 
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");


    session_start();
    if(!isset($_SESSION['x'])){
        header('location:./login');
    }
    if(!ctype_alnum( $_SESSION['x'])){
        header('location:logout.php');
    }

?>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="./css/admin.css?   <?php echo date("l jS \of F Y h:i:s A"); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src="./js/script.js?  <?php echo date("l jS \of F Y h:i:s A"); ?>"></script>
        <script src="./js/admin2.js?   <?php echo date("l jS \of F Y h:i:s A"); ?>"></script>
        <link rel="icon" href="../images/logo.png">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="ml-3" style="width:30%;font-size:20px">
        <?php 

            echo '<span> <span id="welcome" > Welcome</span> <strong>',$_SESSION['x'],'</strong></span>';
        
        ?>
        
        </div>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mr-auto"></div>
         <form action="./signup" class="form-inline my-2 my-lg-0 mr-2">  
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">New Admin</button>
    </form>
         <div  class="my-2 my-lg-0">  
            <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        </div>
    </div>
    </nav>
    
    <div id="slider-gallery">

                <!-- photos currently showed on slider folder  -->
        <h3 class="title text-center">Gallery</h3>
        <div class="photos-gallery">
        
            <?php 
                    
                    $dir = "../images/slider/";

                    // Open a directory, and read its contents
                    if (is_dir($dir)){
                        $photos=array();
                        $i=1;
                    if ($dh = opendir($dir)){
                        while (($file = readdir($dh)) !== false){
                            if(strpos($file, '.jpg')||strpos($file, '.jpeg')||strpos($file, '.png')||strpos($file, '.gif')){
                            $photos[$i]=$file;
                            $i++;
                            }
                        }
                        closedir($dh);
                    }
                    }
                    
                    foreach($photos as $value ){
                        
                        // $value2=str_replace("(","%28",$value);
                        // $value2=str_replace(")","%29",$value);
                         $value2=str_replace(" ","%20",$value);
                        // echo $value2;
                       echo'<div class="slide-photo" style="background-image: url(../images/slider/'.$value2.'?'.rand().'">
                                <form class="delete-photo-form" action="deleteFolderPhoto.php" method="post">
                                    <input type="text" value="'.$value.'" name="imageName" style="display:none">
                                    <button type="submit" class="slide-delete" >X</button>
                                    
                                </form>
                                <div class="gallery-forms">
                                 <div class="centered-forms">
                                    <form class="add-photo-form" action="addPhoto.php" method="post">
                                        <input type="text" value="'.$value.'" name="imageName" style="display:none">
                                        <button title="Add to slider" type="submit" class="slide-add btn btn-outline-success" ><i class="fas fa-upload"></i></button>
                                    
                                    </form>
                                    <form class="update-cover-form" action="updatePhoto.php" method="post">
                                        <input type="text" value="'.$value.'" name="imageName" style="display:none">
                                        <button title="update about doctor cover" type="submit" class="cover-update btn btn-outline-primary" ><i class="fas fa-upload"></i></button>
                                    
                                    </form>
                                 </div>
                                </div>
                                <div class="image-name text-muted">'.$value.'</div>
                                </div>';
                    }
                
            ?>
        </div>
        <!-- photos currently in gallary folder end -->

        <form  id="upload-slider-form" style="margin-top:30px" action="upload-slide.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" class="btn btn-outline-success" style="margin-left:-70px" name="submit"> <i class="fas fa-cloud-upload-alt"></i></button>
        </form>
    

    <!-- upload slider phptos end -->




            <!-- photos currently showed on slider  -->
        <h3 id="slider" class="title text-center mt-5">Current slider photos</h3>
        <div  class="photos-gallery">
            
            <?php 
                    $q="select * from sliderImages where 1";
                    $result=mysqli_query($con,$q);
                    //printf (mysqli_error($con));
                    $items = array();
                        while($row = mysqli_fetch_assoc($result)){
                            $items[] = $row;
                        }
                        
                        $items = array_reverse($items ,true);
                    
                        foreach($items as $value){
                            $value2=str_replace(" ","%20",$value['path']);
                       echo'<div class="slide-photo" style="background-image: url(../images/slider/'.$value2.'?'.rand().'">
                                <form class="delete-photo-form" action="deletePhoto.php" method="post">
                                    <input type="text" value="'.$value['id'].'" name="id" style="display:none">
                                    <button type="submit" class="slide-delete" >X</button>
                                   
                                </form>
                                <div class="image-name text-muted">'.$value['path'].'</div>
                            
                             </div>';
                    }
                
            ?>
        </div> 
                <!-- photos currently showed on slider end -->
        <hr/>         

    </div>
        <!-- alert -->
    <div id="danger" class="alert alert-danger alert-dismissible fade show text-center mt-2" style="opacity:0;" role="alert">
            <strong>Fill all areas please</strong>
        </div>
        <!-- end of alert -->

        <div style="margin-top:-15px;" >

        <div id="youtube" style="margin:0 auto ;" class="card  col-10">
            <div class="card-header text-center">
                <h4 class="title">Youtube Vidoes</h4>
            </div>
            <div class="card-block">
                
                <?php
                    
                    $q="select * from youtubevideos where 1";
                    $result=mysqli_query($con,$q);
                 ?>
                <div id="videos-cont">
                    <ul class="list-group ">
                    <?php 
                        $items = array();
                        while($row = mysqli_fetch_assoc($result)){
                            $items[] = $row;
                        }
                        $items = array_reverse($items ,true);
                    
                        foreach($items as $value){
                            echo'<li class="list-group-item list-group-item-action youtube-li ">';
                            $temp=substr($value['video'],0,7).' class="video-item" '.substr($value['video'],8,strlen($value['video']));
                            
                            echo$temp;

                            echo '<div class="video-forms">';
                                echo'<form action="deleteV.php" method="post" class="form-inline form-l-btn mt-2">
                                        <textarea name="code"  style="height:100px;width:300px;resize:none;display:none" class="form-control">'.$value["video"].'</textarea> 
                                        <button class="btn btn-danger ml-5" type="submit" >delete</button>
                                    </form>';
                                echo'<form action="./update/" method="post"  class="form-inline form-r-btn mt-2">
                                        <textarea name="code"  style="height:100px;width:300px;resize:none;display:none" class="form-control">'.$value["video"].'</textarea>
                                        <button class="btn btn-success ml-2" type="submit" >Update</button>
                                    </form>';
                            echo '</div>';
                    
                $_SESSION['update']='';
                
                echo'</li>';
                         
                         }
                    
                    ?>
                    
                    </ul>
                
                </div>
                <form  onsubmit="return f();"  action="addV.php" method="post" class="form-inline add-video-form  mt-2">
                    <textarea id="code" type="text" name="code" class="form-control add-video-textarea" placeholder="Add Youtube video link here  "></textarea>
                    <button onclick="f()" class="btn btn-primary add-video-btn" type="submit" >Add</button>
                    

                </form>
            </div>
        
        </div>
        
        
    </div>
    <!-- youtubevideos end -->
    <hr/>
    <!-- success stories -->
    <div  id="success-stories" class="mt-5" >
        <div id="stories-card" class="card">
            <div class="card-header text-center title" >
                <h4>success stories</h4>
            </div>
            <div class="card-block">
                <div style="width:100%;height:300px;overflow-y: auto;border:1px solid rgba(26, 26, 26,0.2);border-radius:3.5px;margin:0 auto">
                        <ul class="list-group ">       
                            <?php
                                $q="select * from stories where 1";
                                $result=mysqli_query($con,$q);
                                $items = array();
                                while($row = mysqli_fetch_assoc($result)){
                                    $items[] = $row;
                                }
                                $items = array_reverse($items ,true);
                            
                                foreach($items as $value){
                                    $front=str_replace(" ","%20",$value['frontImg']);
                                    $back=str_replace(" ","%20",$value['backImg']);
                                    echo'<li class="list-group-item list-group-item-action ">
                                            <form class="delete-story-form" action="deleteStory.php" method="post">
                                            <input type="text" value="'.$value['id'].'" name="id" style="display:none">
                                            <input type="text" value="'.$value['frontImg'].'" name="front" style="display:none">
                                            <input type="text" value="'.$value['backImg'].'" name="back" style="display:none">
                                            <button type="submit" class="story-delete">X</button>
                                        
                                        </form>';
                                            
                                        echo'<div class="story-img front-img" ><div  style="border-radius: 5px;width:100px;height:150px;background-image:url(../images/stories/'.$front.');background-position: center center; background-size: cover;"></div>
                                        </div>
                                        <div class="strory-info">
                                            <div class="stroy-name" style="height:auto;margin:5px;"><h5>'.$value["storyName"].'</h5></div>
                                            <div class="story-desc eng"  style="overflow:auto;height:auto;margin:5px;"><p>'.$value["enDesc"].'</p></div>
                                            <div class="story-desc ar"  style="overflow:auto;height:auto;margin:5px;"><p>'.$value["arDesc"].'</p></div>
                                        </div>
                                        <div class="story-img back-img" ><div  style="border-radius: 5px;width:100px;height:150px;background-image:url(../images/stories/'.$back.');background-position: center center; background-size: cover;"></div>
                                        </div>
                                     </li>';
                                    
                                        

                                }
                            ?>
                        
                        </ul>
                </div>
            
            
            
            </div>
        
        
        </div>
    
        
      
    <!-- stories form -->
        <div class="form-story-div ">
            
            <form  id="upload-story-form" class="row" style="margin-top:30px" action="upload-story.php" method="post" enctype="multipart/form-data">
                
                <h4 class="title ">Upload story</h4>
                <input type="text"class="story-name-input col-12 form-control mb-2 mt-2" name="name" placeholder="Patient name">
                <textarea name="eng-story"class="story-form-input col-12 form-control mb-2" placeholder="story in English"></textarea>
                <textarea name="ar-story"class="story-form-input col-12 form-control mb-2" style="direction:rtl" placeholder="القصة بالعربية"></textarea>
                <div class="story-img col-5" id="fileToUpload1">
                    <h5 class="head">Image before</h5>
                    <input type="file"  name="fileToUpload1" >
                </div>
                <div class="story-img col-5" id="fileToUpload2">
                <h5 class="head">Image after</h5>
                    <input type="file"  name="fileToUpload2">
                </div>
                
                <button type="submit" id="story-form-btn" class="btn btn-outline-success  " name="submit"> Upload</button>
            </form>
        </div>

    </div>
    <!-- end storoies form -->

<hr/>
    <!--start aboiut doctor form -->

    <h4 class="text-center title mt-5" style="padding-bottom:10px;border-bottom:1px solid rgba(107, 107, 182, 0.363);">About Doctor</h4>
    
    <?php 
        $q='SELECT * From aboutdoctor Where id=1';
        $result=mysqli_query($con,$q);
        while($row = mysqli_fetch_assoc($result)){
            $parag=$row['paragraph'];
            $img=$row['image'];
        }
    
    ?>

    <div class="form-story-div ">
            <div id="about-doctor-content" class="row">
                <div id="current-cover" class="col-6" style="background-image:url('../images/slider/<?php echo $img;?>');background-position: center center; background-size: cover;height:150px;"></div>
                <div id="current-paragraph" class="col-6"><p><?php echo $parag; ?></p></div>
            </div>
            <form  id="upload-story-form" style="margin-top:30px" action="changeParagraph.php" method="post" enctype="multipart/form-data">
                <textarea name="doctorparagraph"class="story-form-input form-control mb-4 col-12" placeholder="About doctor"></textarea>               
                <button type="submit" id="story-form-btn" class="btn btn-outline-success " name="submit"> <i class="fas fa-cloud-upload-alt"></i></button>
            </form>
        </div>

    </div>
    
<!--end about doctor-->


    </body>


</html>

