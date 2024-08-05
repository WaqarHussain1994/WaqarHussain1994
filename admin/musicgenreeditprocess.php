<?php
require_once ('db.php');

$music_genre_name = $_POST['music_genre_name'];
$id = $_POST['id'];
$query = "UPDATE musicgenre SET music_genre_name='" . $music_genre_name . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:musicgenre.php?msg=successfully  updated genre ");
} else {
    header("location:users.php?msg=failed to update genre");
}



?>