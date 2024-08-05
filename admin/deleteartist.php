<?php
require_once ('db.php');
$artist_id = $_GET['id'];
$query = "DELETE FROM artist WHERE artist_id=" . $artist_id;
$result = mysqli_query($connection, $query);

if ($result) {
    header("location:artist.php?msg=Artist Deleted");
} else {
    header("location:artist.php?msg=Artist Not Deleted");
}
?>