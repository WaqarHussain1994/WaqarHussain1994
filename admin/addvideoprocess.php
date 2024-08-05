<?php

require_once ('db.php');
$tempvideo_name = $_FILES['video_loc']['tmp_name'];
$fileName = $_FILES['video_loc']['name'];
$video = "video/$fileName";
$tempvideo_thumbnail = $_FILES['video_thumbnail']['tmp_name'];
$thumbfilename = $_FILES['video_thumbnail']['name'];
$thumbnail = "thumbnail/$thumbfilename";

if (move_uploaded_file($tempvideo_name, $video) && move_uploaded_file($tempvideo_thumbnail, $thumbnail)) {
    session_start();
    $video_artist = $_POST['video_artist'];
    $video_title = $_POST['video_title'];
    $release_year = $_POST['release_date'];
    $video_genre = $_POST['video_genre'];
    $video_description = $_POST['video_description'];

    $query = "INSERT INTO video (video_loc,video_thumbnail,video_title,video_genre,video_description,release_date,video_artist) VALUES ('" . $video . "','" . $thumbnail . "','" . $video_title . "','" . $video_genre . "','" . $video_description . "','" . $release_year . "','" . $video_artist . "')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location:video.php?msg=Video Added successfully");
    } else {
        header("Location:addvideo.php?msg= Error in adding video");
    }
}


?>