<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `music` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:music.php?msg=Music Deleted Successfully');
} else {
    header('location:music.php?msg=Error in Deleting Music ');
}
?>