<?php

include "dbh.php";
$name = $_POST['name'];
$file_name = basename($_FILES['file']['name']);
$fileExt=explode('.',$file_name);
$fileType=strtolower(end($fileExt));
$path = basename($_FILES['file']['name']);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($fileType!= "jpg" && $fileType != "png" && $fileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

else{
$sql="INSERT INTO mydb (id, name, rating, image) VALUES (NULL, '$name', '0', '$file_name')";
$run=mysqli_query($conn,$sql);

move_uploaded_file($_FILES['file']['tmp_name'],$path);}
header('Location:index.php');
?>