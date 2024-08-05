<?php

require_once ('db.php');
$video_title = $_POST['video_title'];
$video_thumbnail = $_POST['video_thumbnail'];

$video_artist = $_POST['video_artist'];
$video_genre = $_POST['video_genre'];
$release_date = $_POST['release_date'];
$video_description = $_POST['video_description'];
$id = $_POST['id'];

if (isset($_FILES['video_thumbnail_new']['name']) &&  $_FILES['video_thumbnail_new']['name'] != '') {
    $temp_name = $_FILES['video_thumbnail_new']['tmp_name'];
    $fileName = $_FILES['video_thumbnail_new']['name'];
    $video_thumbnail = "thumbnail/$fileName";
    move_uploaded_file($temp_name, $video_thumbnail);
} else {
    $artist_photo = $_POST['video_thumbnail'];
}


$query = "UPDATE video SET video_title='" . $video_title . "',video_thumbnail='" . $video_thumbnail . "',video_genre='" . $video_genre . "',video_description='" . $video_description . "',release_date='" . $release_date . "',video_artist='" . $video_artist . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:video.php?msg=successfully updated video detail");
} else {
    header("location:users.php?msg=failed to update video detail");
}

?>