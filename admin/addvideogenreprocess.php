<?php 
require_once('db.php');
$video_genre_name=$_POST['video_genre_name'];


$query="INSERT INTO videogenre (video_genre_name) VALUES ('".$video_genre_name."')";
$result=mysqli_query($connection,$query);
if($result){
    header("Location:videogenre.php?msg=Genra Added successfully");
}else{
    header("Location:videogenre.php?msg=Genra Not Added successfully");
}
?>