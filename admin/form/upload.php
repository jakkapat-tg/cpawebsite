<?php
/*
$targetfolder = "testupload/";

$targetfolder = $targetfolder . basename($_FILES['file']['name']);

$ok = 1;

$file_type = $_FILES['file']['type'];

if ($file_type == "application/pdf" || $file_type == "image/gif" || $file_type == "image/jpeg") {

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {

        echo "The file " . basename($_FILES['file']['name']) . " is uploaded";
    } else {

        echo "Problem uploading file";
    }
} else {

    echo "You may only upload PDFs, JPEGs or GIF files.<br>";
}
*/

if ( !empty($_FILES) )
{
$file1 = $_FILES['file1'];
$file2 = $_FILES['file2'];
$file3 = $_FILES['file3'];

$status1 = move_uploaded_file($file1['tmp_name'], $file1['name']);
$status2 = move_uploaded_file($file2['tmp_name'], $file2['name']);
$status3 = move_uploaded_file($file3['tmp_name'], $file3['name']);

if( $status1 )
{
    echo "<script>";
}
}

?>

