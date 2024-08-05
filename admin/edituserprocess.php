<?php 

require_once('db.php');
$email=$_POST['email'];
$username=$_POST['username'];
$role=$_POST['role'];
$id=$_POST['id'];
$query = "UPDATE users SET email='" . $email . "',username='".$username."',role='".$role."' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if($result){
    header("location:users.php?msg=successfully  updated user detail");
}else{
    header("location:users.php?msg=failed to update user detail");
}

?>