<?php
require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM album WHERE id=" . $id;
$result = mysqli_query($connection, $query);

if ($result) {
    header("location:album.php?msg=Artist Deleted");
} else {
    header("location:album.php?msg=Artist Not Deleted");
}
?>