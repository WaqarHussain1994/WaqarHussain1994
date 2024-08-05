<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound - The App For Music And Video</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once ('components/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once ('components/sidebar.php'); ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Videos</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Video Details</h3>

                        <div class="card-tools">
                            <a href="video.php" class="btn btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> View video
                            </a>
                        </div>
                    </div>
                    <?php
                    require_once ('db.php');
                    $query = "SELECT * from video WHERE id=" . $_GET['id'];
                    $result = mysqli_query($connection, $query);
                    if ($result->num_rows > 0) {
                        $row1 = mysqli_fetch_assoc($result);
                    }
                    ?>
                    <form action="editvideoprocess.php" method="POST" enctype="multipart/form-data">
                        <form action="addvideoprocess.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="video_title">Enter Video Title</label>
                                    <input required type="text" class="form-control" id="video_title" name="video_title"
                                        value="<?php echo $row1['video_title'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $row1['id'] ?>">
                                </div>

                                <div class="card-body">
                                <div class="form-group">
                                    <label for="video_name">Thumbnail</label>
                                    <br>
                                    <input type="hidden" value="<?php echo $row1['video_thumbnail'] ?>" name="video_thumbnail">
                                    <img src="<?php echo $row1['video_thumbnail'] ?>" alt="" class="img-fluid" width="200" height="200">
                                </div>
                                </div>
                                

                                <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="video_thumbnail_new" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">Enter Video Thumbnail</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="video_thumbnail" accept="image/*" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <label for="video_artist">Choose Artist Of video</label>
                                    <Select id="video_artist" name="video_artist" class="form-control">
                                        <?php
                                        require_once ('db.php');
                                        $query = "SELECT * FROM video_artist";
                                        $result = mysqli_query($connection, $query);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['artist_name'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </Select>
                                </div>
                                <div class="form-group">
                                    <label for="video_genre">Choose Genre Of video</label>
                                    <Select id="video_genre" name="video_genre" class="form-control"
                                        value="<?php echo $row['video_genre'] ?>">>
                                        <?php
                                        require_once ('db.php');
                                        $query = "SELECT * FROM videogenre";
                                        $result = mysqli_query($connection, $query);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['video_genre_name'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </Select>
                                </div>
                                <div class="form-group">
                                    <label for="release_date">Enter video Release Date</label>
                                    <input required type="text" class="form-control" id="release_date"
                                        name="release_date" value="<?php echo $row1['release_date'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="video_description">Edit Video Description</label>
                                    <input required type="text" class="form-control" id="video_description"
                                        name="video_description" value="<?php echo $row1['video_description'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $row1['id'] ?>">
                                </div>



                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">Add video</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="video_loc" accept="audio/*" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </form>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once ('components/footer.php'); ?>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>