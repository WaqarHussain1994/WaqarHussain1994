<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `videogenre` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:videogenre.php?msg=Video Genre  Deleted Successfully');
} else {
    header('location:videogenre.php?msg=Error in Deleting Video  Genre');
}
?>