<?php
require_once('admin/db.php');
$email = $_POST['email'];
$password = $_POST['password'];



$sqlquery ="SELECT * FROM  users WHERE email='$email' AND password = '$password'";
$result = mysqli_query($connection,$sqlquery);
if($result->num_rows>0){
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user'] = $row;
    header('location:index.php');
}else{
    header('location:login.php?msg=invalid user/password');
}