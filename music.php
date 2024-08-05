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
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/searchbar.css">
</head>

<body style="background-color: black;">



    <!-- Navbar HERE-->
    <?php require_once ('components/navbar.php') ?>
    <!-- Navbar HERE-->
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="">
                    <div class="search">
                        <input placeholder="Search..." type="text" name="query" value="<?php if ($_GET['query'] != '') {
                            echo $_GET['query'];
                        } ?>">
                        <button type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php require_once ('admin/db.php');
            if ($_GET['query'] != '') {
                $query = "SELECT music.*,artist.artist_name, artist.artist_image, album.album_name, album.album_photo, album.releaseyear,musicgenre.music_genre_name FROM music INNER JOIN artist ON music.music_artist= artist.artist_id INNER JOIN album ON music.music_album = album.id INNER JOIN musicgenre ON music.music_genre = musicgenre.id WHERE music.`music_artist` IN (SELECT artist_id FROM artist WHERE artist.`artist_name` LIKE '%" . $_GET['query'] . "%') OR music.`music_title` LIKE '%" . $_GET['query'] . "%'";
            } else {
                $query = "SELECT music.*,artist.artist_name, artist.artist_image, album.album_name, album.album_photo, album.releaseyear,musicgenre.music_genre_name FROM music INNER JOIN artist ON music.music_artist= artist.artist_id INNER JOIN album ON music.music_album = album.id INNER JOIN musicgenre ON music.music_genre = musicgenre.id";
            }
            $result = mysqli_query($connection, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <div class="col-md-4 my-5">
                        <a href="playmusic.php?id=<?php echo $row['id'] ?>" class="text-white">
                            <div class="card"
                                style="background-image: url('admin/<?php echo $row['music_thumbnail'] ?>');background-size: cover;background-repeat: no-repeat;background-position: center center; width:80%;">
                                <div class="card-details ">
                                    <p class="text-title text-white text-capitalize"><?php echo $row['music_title'] ?></p>
                                    <p class="text-white text-capitalize" style="font-weight: bolder;">Album Name
                                        <?php echo $row['album_name'] ?>
                                    </p>
                                </div>
                                <button class="card-button">Play Now</button>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>


    <!-- footer  section start -->
    <?php require_once ('components/footer.php') ?>
    <!-- footer  section end -->
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