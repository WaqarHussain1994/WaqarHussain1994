<?php 
require_once('db.php');
$id=$_GET['id'];
$query="DELETE FROM `users` WHERE `id`='$id'";
$result=mysqli_query($connection,$query);
if($result){
    header('location:users.php?msg=User  Deleted Successfully');
}else{
    header('location:users.php?msg=Error Deleting User');
}

?>