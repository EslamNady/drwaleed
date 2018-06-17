
<?php
$target_dir = "../images/stories/";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$imagename1=basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$imagename2=basename($_FILES["fileToUpload2"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk2 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk2 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    $name = pathinfo($_FILES['fileToUpload1']['name'], PATHINFO_FILENAME);
    $extension = pathinfo($_FILES['fileToUpload1']['name'], PATHINFO_EXTENSION);
    $increment = 1; //start with no suffix
    while(file_exists($name .'-'. $increment . '.' . $extension)) {
        $increment++;
    }
    $basename = $name .'-'. $increment . '.' . $extension;
    $imagename1=$basename;
    $target_file1 = $target_dir .$basename;
    $uploadOk1=1;
}
if (file_exists($target_file2)) {
    $name = pathinfo($_FILES['fileToUpload2']['name'], PATHINFO_FILENAME);
    $extension = pathinfo($_FILES['fileToUpload2']['name'], PATHINFO_EXTENSION);
    $increment = 1; //start with no suffix
    while(file_exists($name .'-'. $increment . '.' . $extension)) {
        $increment++;
    }
    $basename = $name .'-'. $increment . '.' . $extension;
    $imagename2=$basename;
    $target_file2 = $target_dir .$basename;
    $uploadOk2=1;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
if ($_FILES["fileToUpload2"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
}

if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
}
if($uploadOk1==1&&$uploadOk2==1){
 
    $image1=$imagename1;
    $image2=$imagename2;
    $name=$_POST['name'];
    $ar=$_POST['ar-story'];
    $en=$_POST['eng-story'];
    require_once "../classes/DBclass.php";
    $connect= new connection;
    $con=$connect->connect();
    mysqli_set_charset($con,"utf8");
    $q="INSERT INTO stories (storyName,arDesc,enDesc,frontimg,backImg) VALUES ('$name','$ar','$en','$image1','$image2')";
    $result=mysqli_query($con,$q);
 
    
}


header('location:../admin/#success-stories');
?>
