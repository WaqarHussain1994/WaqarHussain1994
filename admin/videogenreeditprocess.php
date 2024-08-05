<?php
require_once ('db.php');

$video_genre_name = $_POST['video_genre_name'];
$id = $_POST['id'];
$query = "UPDATE videogenre SET video_genre_name='" . $video_genre_name . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:videogenre.php?msg=successfully  updated genre ");
} else {
    header("location:users.php?msg=failed to update genre");
}


?>