<?php 
require_once('db.php');
$music_genre_name=$_POST['music_genre_name'];


$query="INSERT INTO musicgenre (music_genre_name) VALUES ('".$music_genre_name."')";
$result=mysqli_query($connection,$query);
if($result){
    header("Location:musicgenre.php?msg=Genra Added successfully");
}else{
    header("Location:musicgenre.php?msg=Genra Not Added successfully");
}
?>