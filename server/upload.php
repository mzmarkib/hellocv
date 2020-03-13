<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "../upload/".$filename;
// $path_info = pathinfo($location);
// $extension = path_info['extension'];
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
// echo $extension;
/* Valid extensions */
$valid_extensions = array("jpg","jpeg","png");

/* Check file extension */
if(!in_array(strtolower($imageFileType), $valid_extensions)) {
   $uploadOk = 0;
}

if(file_exists($location)) {
   $id = 1;
   do {
       $location = "../upload/".$id.'_'.$filename;
       $id++;
   } while(file_exists($location));
   }

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
     echo $location;
   }else{
     echo 0;
   }
}