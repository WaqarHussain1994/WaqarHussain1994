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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="playmusic.css">
    <link rel="stylesheet" href="css/plyr.css" />
</head>

<body style="background-color: black;color: white;">

    <!-- Navbar HERE-->
    <?php require_once('components/navbar.php') ?>
    <!-- Navbar HERE-->
    <?php

    require_once('admin/db.php');
    $id = $_GET['id'];
    $query = "SELECT video.*, video_artist.artist_name, videogenre.`video_genre_name`
    FROM video
    INNER JOIN video_artist ON video.video_artist = video_artist.id
    INNER JOIN videogenre ON videogenre.id = video.video_genre WHERE video.`id`=" . $id;
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-4 rounded-lg" style="background-color: black;color: green;">
                <video class="--plyr-badge-border-radius" id="player" playsinline controls data-poster="admin/<?php echo $row['video_thumbnail'] ?>" >
                    <source src="admin/<?php echo $row['video_loc'] ?>" type="video/mp4" />
                </video>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white" style="font-size: 30px;">Title:</h2>
                <h4><?php echo $row['video_title'] ?></h4>
            </div>
            <div class="col-md-12">
                <h2 class="text-white" style="font-size: 30px;">Genre : </h2>
                <h4><?php echo $row['video_genre_name'] ?></h4>
            </div>
            <div class="col-md-12">
                <h2 class="text-white" style="font-size: 30px;">Release Date : </h2>
                <h4><?php echo $row['release_date'] ?></h4>
            </div>
            <div class="col-md-12">
                <h2 class="text-white" style="font-size: 30px;">Description : </h2>
                <h4><?php echo $row['video_description'] ?></h4>
            </div>
        </div>
    </div>



    <!-- footer  section start -->
    <?php require_once('components/footer.php') ?>
    <!-- footer  section end -->
    <script src=" js/jquery.min.js">
    </script>
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
    <script src="js/plyr.js"></script>
    <script>
        const player = new Plyr('#player');

        player.stop();
    </script>
</body>

</html>