<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM video_artist WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:videoartist.php?msg=Artist  Deleted Successfully');
} else {
    header('location:videoartist.php?msg=Error in Deleting Artist ');
}
?>