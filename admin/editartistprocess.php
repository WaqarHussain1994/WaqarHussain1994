<?php


require_once ('db.php');
$artist_name = $_POST['artist_name'];
$artist_id = $_POST['artist_id'];



if(isset($_FILES['artist_image_new']['name']) &&  $_FILES['artist_image_new']['name']!=''){
    $temp_name = $_FILES['artist_image_new']['tmp_name'];
    $fileName = $_FILES['artist_image_new']['name'];
    $artist_image = "artist_image/time().$fileName";
    move_uploaded_file($temp_name, $artist_image);
}else{
    $artist_image = $_POST['artist_image'];
}

$query = "UPDATE artist SET artist_name='" . $artist_name . "' , artist_image='".$artist_image."' WHERE artist_id=" . $artist_id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location:artist.php?msg=Artist Added successfully");
} else {
    header("Location:artist.php?msg= Error in updating  artist");
}




?>