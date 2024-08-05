<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `musicgenre` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:musicgenre.php?msg=Music Genre  Deleted Successfully');
} else {
    header('location:musicgenre.php?msg=Error in Deleting Music  Genre');
}
?>