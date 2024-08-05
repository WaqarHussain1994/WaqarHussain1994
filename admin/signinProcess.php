<?php 
require_once('db.php');
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$role=$_POST['role'];

$query="INSERT INTO users (username,email,password,role) VALUES ('".$username."','".$email."','".$password."','".$role."')";
$result=mysqli_query($connection,$query);
if($result){
    header("Location:login.php?msg=Sign up success");
}else{
    header("Location:signin.php?msg=Sign up failed");
}
?>