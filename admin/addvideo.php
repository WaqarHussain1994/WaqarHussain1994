<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound - The Music And Video App</title>

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
                            <h1>Add Video</h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add videos</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Video</h3>

                        <div class="card-tools">
                            <a href="video.php" class="btn btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> View Videos
                            </a>
                        </div>
                    </div>

                    <form action="addvideoprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="video_title">Enter video Title</label>
                                <input required type="text" class="form-control" id="video_title" name="video_title">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Enter Video Thumbnail</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="video_thumbnail" accept="image/*" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

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
                                <Select id="video_genre" name="video_genre" class="form-control">
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
                                <label for="video_year">Enter video Release date</label>
                                <input required type="text" class="form-control" id="release_date" name="release_date">
                            </div>
                            <div class="form-group">
                                <label for="video_title">Enter video Description</label>
                                <input required type="text" class="form-control" id="video_description" name="video_description">
                            </div>
                            
                           
                            
                            <div class="form-group">
                                <label for="exampleInputFile">Add Video</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="video_loc" accept="video/*" required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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