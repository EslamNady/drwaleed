<?php 

$filename = $_POST['imageName']; //get the filename
unlink('../images/slider/'.DIRECTORY_SEPARATOR.$filename); //delete it
header('location:../admin/');

?>