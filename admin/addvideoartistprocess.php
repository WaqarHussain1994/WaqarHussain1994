<?php
require_once ('db.php');
$temp_name = $_FILES['artist_image']['tmp_name'];
$fileName = $_FILES['artist_image']['name'];
$artist_image = "video_artist_image/$fileName";
if (move_uploaded_file($temp_name, $artist_image)) {
    session_start();
    $artist_name = $_POST['artist_name'];
    $query = "INSERT INTO video_artist (artist_name,artist_img) VALUES ('" . $artist_name . "','" . $artist_image . "')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:videoartist.php?msg=Artist Added successfully");
    } else {
        header("Location:addvideoartist.php?msg= Error in adding artist");

    }
}


?>