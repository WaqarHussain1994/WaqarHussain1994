<?php


require_once ('db.php');
$artist_name = $_POST['artist_name'];
$artist_id = $_POST['id'];



if (isset($_FILES['artist_image_new']['name']) && $_FILES['artist_image_new']['name'] != '') {
    $temp_name = $_FILES['artist_image_new']['tmp_name'];
    $fileName = $_FILES['artist_image_new']['name'];
    $artist_image = "video_artist_image/$fileName";
    move_uploaded_file($temp_name, $artist_image);
} else {
    $artist_image = $_POST['artist_image'];
}

$query = "UPDATE video_artist SET artist_name='" . $artist_name . "' , artist_img='" . $artist_image . "' WHERE id=" . $artist_id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location:videoartist.php?msg=Artist Updated successfully");
} else {
    header("Location:videoartist.php?msg= Error in updating  artist");
}




?>