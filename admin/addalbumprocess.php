<?php
require_once ('db.php');
$temp_name = $_FILES['albumimage']['tmp_name'];
$fileName = $_FILES['albumimage']['name'];
$albumimage = "albumimage/$fileName";
if (move_uploaded_file($temp_name, $albumimage)) {
    session_start();
    $album_name = $_POST['album_name'];
    $releaseyear = $_POST['releaseyear'];
    $artist = $_POST['artist'];
    $query = "INSERT INTO album (album_name,artist,album_photo,releaseyear) VALUES ('" . $album_name . "','" . $artist . "','" . $albumimage . "','" . $releaseyear . "')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:album.php?msg=Album Added successfully");
    } else {
        header("Location:addalbum.php?msg= Error in adding album");
    }
}


?>