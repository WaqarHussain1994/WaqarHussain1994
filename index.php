<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Sound - The App For Music And Video</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
   <!-- header section start -->
   <?php include_once ('components/navbar.php') ?>
   <!-- header section end -->
   <!-- banner section end -->
   <?php
   require_once ('admin/db.php');
   $query = "SELECT video.*, video_artist.artist_name, videogenre.`video_genre_name`
   FROM video
   INNER JOIN video_artist ON video.video_artist = video_artist.id
   INNER JOIN videogenre ON videogenre.id = video.video_genre  ORDER BY RAND() LIMIT 1";
   $result = mysqli_query($connection, $query);
   $Carouselrow = mysqli_fetch_assoc($result);
   ?>
   <div class="banner_section layout_padding"
      style="background-image: url(admin/<?php echo $Carouselrow['video_thumbnail'] ?>);background-repeat: no-repeat;background-size:100vw 100vh;">
      <div class="container">
         <div class="row">
            <div class="col-md-6" style="background: rgba(255, 255, 255, 0.22);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(1.6px);
-webkit-backdrop-filter: blur(1.6px);
border: 1px solid rgba(255, 255, 255, 0.49);">
               <div class="banner_taital " style="texts">Enjoy:
                  <br><?php echo $Carouselrow['video_title'] ?> With <br>
                  <?php echo $Carouselrow['artist_name'] ?>
               </div>
               <p class="banner_text text-capitalize"><?php echo $Carouselrow['video_description'] ?> </p>
               <div class="see_bt"><a href="#" class="carouselbtn" style="background-color: green;">See More</a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="play_icon"><a href="playvideo.php?id=<?php echo $Carouselrow['id'] ?>"><img
                        src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
   <!-- movies section start -->
   <div class="movies_section layout_padding" style="background-color: black;">
      <div class="container">
         <div class="movies_section_2 layout_padding">
            <h2 class="letest_text">Latest Music<span class="badge rounded-pill  mx-2 text-bg-primary"
                  style="background-color:#138808 ;color:white;border-radius: 40%;">New</span>
            </h2>
            <div class="seemore_bt"><a href="music.php">See More</a></div>
            <div class="movies_main">
               <div class="iamge_movies_main">
                  <?php
                  require_once ('admin/db.php');
                  $musicQuery = "SELECT music.*,artist.artist_name, artist.artist_image, album.album_name, album.album_photo, album.releaseyear,musicgenre.music_genre_name FROM music INNER JOIN artist ON music.music_artist= artist.artist_id INNER JOIN album ON music.music_album = album.id INNER JOIN musicgenre ON music.music_genre = musicgenre.id ORDER BY music.`id` DESC
                  LIMIT 4 ";
                  $musicResult = mysqli_query($connection, $musicQuery);
                  if ($musicResult->num_rows > 0) {
                     while ($musicrow = mysqli_fetch_assoc($musicResult)) {
                        ?>
                        <div class="iamge_movies">
                           <div class="image_3">
                              <img src="admin/<?php echo $musicrow['music_thumbnail'] ?>" class="image img-fluid"
                                 style="width:100%;aspect-ratio: 3/4; object-fit: contain;">
                              <div class="middle">
                                 <div class="playnow_bt" style="background-color: green;"><a
                                       href="playmusic.php?id=<?php echo $musicrow['id'] ?>"
                                       style="cursor: pointer;color: white;">Play Now</a></div>
                              </div>
                           </div>
                           <h1 class="code_text"><?php echo $musicrow['music_title'] ?></h1>
                           <p class="there_text">Artist Name : <?php echo $musicrow['artist_name'] ?> </p>
                           <p class="there_text">Music Genre : <?php echo $musicrow['music_genre_name'] ?> </p>
                        </div>
                        <?php
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
         <div class="movies_section_2 layout_padding">
            <h2 class="letest_text">Latest Video<span class="badge rounded-pill  mx-2 text-bg-primary"
                  style="background-color:#138808 ;color:white;border-radius: 40%;">New</span></h2>
            <div class="seemore_bt"><a href="video.php">See More</a></div>
            <div class="movies_main">
               <div class="iamge_movies_main">
                  <?php
                  require_once ('admin/db.php');
                  $videoQuerry = "SELECT video.*, video_artist.artist_name, videogenre.`video_genre_name`
                  FROM video
                  INNER JOIN video_artist ON video.video_artist = video_artist.id
                  INNER JOIN videogenre ON videogenre.id = video.video_genre  ORDER BY video.`id` LIMIT 4";
                  $videoResult = mysqli_query($connection, $videoQuerry);
                  if ($videoResult->num_rows > 0) {
                     while ($videorow = mysqli_fetch_assoc($videoResult)) {
                        ?>
                        <div class="iamge_movies">
                           <div class="image_3">
                              <img src="admin/<?php echo $videorow['video_thumbnail'] ?>" class="image"
                                 style="width:100%;aspect-ratio: 3/4; object-fit: contain;">
                              <div class="middle">
                                 <div class="playnow_bt" style="background-color: green;"><a
                                       href="playvideo.php?id=<?php echo $videorow['id'] ?>"
                                       style="cursor: pointer;color: white;">Play Now</a></div>
                              </div>
                           </div>
                           <h1 class="code_text"><?php echo $videorow['video_title'] ?></h1>
                           <p class="there_text">Artist Name : <?php echo $videorow['artist_name'] ?> </p>
                           <p class="there_text">Video Genre : <?php echo $videorow['video_genre_name'] ?> </p>
                        </div>
                        <?php
                     }
                  }
                  ?>
               </div>
            </div>
         </div>

         <div class="seebt_1"><a href="#" style="background-color: green;color:white">See More</a></div>
      </div>
   </div>
   <!-- movies section end -->
   <!-- newsletter section start -->

   <!-- newsletter section end -->
   <!-- cooming  section start -->
   <!-- cooming  section end -->
   <!-- footer  section start -->
   <?php require_once ('components/footer.php') ?>
   <!-- footer  section end -->
   <!-- copyright section start -->
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   <script>
      $('#datepicker').datepicker({
         uiLibrary: 'bootstrap4'
      });
   </script>
</body>

</html>