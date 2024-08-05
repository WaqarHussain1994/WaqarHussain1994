<?php


require_once('db.php');


$album_name = $_POST['album_name'];
$releaseyear = $_POST['releaseyear'];
$id = $_POST['id'];
$artist = $_POST['artist'];

if (isset($_FILES['album_photo_new']['name']) &&  $_FILES['album_photo_new']['name'] != '') {
    $temp_name = $_FILES['album_photo_new']['tmp_name'];
    $fileName = $_FILES['album_photo_new']['name'];
    $album_photo = "albumimage/$fileName";
    move_uploaded_file($temp_name, $album_photo);
} else {
    $artist_photo = $_POST['album_photo'];
}

$query = "UPDATE album SET album_name='" . $album_name . "' ,album_photo='" . $album_photo . "',releaseyear='" . $releaseyear . "',artist='" . $artist . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location:album.php?msg=album Updated successfully");
} else {
    header("Location:album.php?msg= Error in updating  album");
}
