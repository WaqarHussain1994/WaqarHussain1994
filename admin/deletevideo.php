<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `video` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:video.php?msg=Video Deleted Successfully');
} else {
    header('location:video.php?msg=Error in Deleting Video ');
}
?>