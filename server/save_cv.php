<?php
include 'config.php';
session_start();

$html = $_POST['cv_html'];

$fname = strtolower($_POST['FNAM']);
$lname = strtolower($_POST['LNAM']);

$file = "../cvpreview/".$fname."_".$lname.".html";


if(file_exists($file)) {
    $id = 1;
    do {
        $file = "../cvpreview/".$fname.$id."_".$lname.".html";
        $id++;
    } while(file_exists($file));
}
  

$final = substr($file, 3);

$_SESSION['cv_link'] = $final;

$ifemail = $_SESSION['email'];

$sql = "UPDATE users_data SET cv_template='".$final."' WHERE email ='".$ifemail."'";

// $sql = "UPDATE users_data SET cv_template='Doe' WHERE id=2";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}


$myfile = fopen($file, "w") or die("Unable to open file!");
fwrite($myfile, $html);
fclose($myfile);


header("location:../create-cv.php?saved");

