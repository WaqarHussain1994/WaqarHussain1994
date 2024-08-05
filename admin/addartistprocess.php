<?php
require_once ('db.php');
$temp_name = $_FILES['artist_image']['tmp_name'];
$fileName = $_FILES['artist_image']['name'];
$artist_image = "artist_image/$fileName";
if (move_uploaded_file($temp_name, $artist_image)) {
    session_start();
    $artist_name = $_POST['artist_name'];
    $query = "INSERT INTO artist (artist_name,artist_image) VALUES ('" . $artist_name . "','" . $artist_image . "')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:artist.php?msg=Artist Added successfully");
    } else {
        header("Location:addartist.php?msg= Error in adding artist");

    }
}


?>