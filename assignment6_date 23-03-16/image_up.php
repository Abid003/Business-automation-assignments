<?php
include "dbconnector.php";
if (isset($_POST['upload'])) {
    $imgName = $_FILES['image']['name'];
    $tmImgName = $_FILES['image']['tmp_name'];
    $path = 'upload/';
    $path1 = $path.$imgName;
   // echo $imgName." ".$tmImgName."  ";

    move_uploaded_file($tmImgName,$path1);
    $img = file_get_contents($path1);

    $image_base64 = base64_encode($img);
    
    //echo $image_base64;


    $sql = "INSERT INTO `image`( `img_name`, `Img_bitcode`, `img_path`) VALUES ('$imgName','$image_base64','$path')";
    if (mysqli_query($conn, $sql)) {
        echo "image uploaded";
    } else {
        echo "not added";
    }
}

?>