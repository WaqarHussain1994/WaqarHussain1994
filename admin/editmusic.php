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
                            <h1>Edit Music</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Music</h3>

                        <div class="card-tools">
                            <a href="music.php" class="btn btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> View Music 
                            </a>
                        </div>
                    </div>
                    <?php
                    require_once ('db.php');
                    $query = "SELECT * from music WHERE id=" . $_GET['id'];
                    $result = mysqli_query($connection, $query);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    ?>
                    <form action="editmusicprocess.php" method="POST" enctype="multipart/form-data">
                        <form action="addmusicprocess.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="music_title">Enter Music Title</label>
                                    <input required type="text" class="form-control" id="music_title" name="music_title"
                                        value="<?php echo $row['music_title'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                </div>


                                <div class="card-body">
                                <div class="form-group">
                                    <label for="album_name">Thumbnail</label>
                                    <br>
                                    <input type="hidden" value="<?php echo $row['music_thumbnail'] ?>" name="music_thumbnail">
                                    <img src="<?php echo $row['music_thumbnail'] ?>" alt="" class="img-fluid" width="200" height="200">
                                </div>
                            </div>


                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="music_thumbnail_new" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="music_year">Enter Music Release Year</label>
                                    <input required type="text" class="form-control" id="music_year" name="music_year"
                                        value="<?php echo $row['music_year'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="music_artist">Choose Artist Of Music</label>
                                    <Select id="music_artist" name="music_artist" class="form-control"
                                        value="<?php echo $row['music_artist'] ?>">>
                                        <?php
                                        require_once ('db.php');
                                        $query = "SELECT * FROM artist";
                                        $result = mysqli_query($connection, $query);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?php echo $row['artist_id'] ?>">
                                                    <?php echo $row['artist_name'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </Select>
                                </div>
                                <div class="form-group">
                                    <label for="music_album">Choose Album Of Music</label>
                                    <Select id="music_album" name="music_album" class="form-control"
                                        value="<?php echo $row['music_album'] ?>">>
                                        <?php
                                        require_once ('db.php');
                                        $query = "SELECT * FROM album";
                                        $result = mysqli_query($connection, $query);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['album_name'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </Select>
                                </div>
                                <div class="form-group">
                                    <label for="music_genre">Choose Genre Of Music</label>
                                    <Select id="music_genre" name="music_genre" class="form-control"
                                        value="<?php echo $row['music_genre'] ?>">>
                                        <?php
                                        require_once ('db.php');
                                        $query = "SELECT * FROM musicgenre";
                                        $result = mysqli_query($connection, $query);
                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['music_genre_name'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </Select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">Add Music</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="music_loc" accept="audio/*" required>
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