<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound - The Music And Video App</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once('components/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once('components/sidebar.php'); ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Albums</h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Albums</li>
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
                        <h3 class="card-title">Edit Album</h3>

                        <div class="card-tools">
                            <a href="album.php" class="btn btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> View Albums
                            </a>
                        </div>
                    </div>
                    <?php
                    require_once('db.php');
                    $sql = "SELECT * FROM `album` WHERE id=" . $_GET['id'];
                    $result = mysqli_query($connection, $sql);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    ?>
                    <form action="editalbumprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="album_name">Album name</label>
                                <input required type="text" class="form-control" id="album_name" name="album_name" value="<?php echo $row['album_name']; ?>" placeholder="Enter album name">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="album_name">Album Photo</label>
                                    <br>
                                    <input type="hidden" value="<?php echo $row['album_photo'] ?>" name="album_photo">
                                    <img src="<?php echo $row['album_photo'] ?>" alt="" class="img-fluid" width="200" height="200">
                                </div>
                            </div>


                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="album_photo_new" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="releaseyear">Add a Release Year </label>
                                <input required type="text" class="form-control" id="releaseyear" name="releaseyear" value="<?php echo $row['releaseyear']; ?>" placeholder="Enter release year">
                            </div>
                            <div class="form-group">
                                <label for="artist">Add an Artist</label>
                                <select name="artist" id="artist" class="form-control">
                                    <?php
                                    require_once('db.php');
                                    $query = "SELECT * FROM artist";
                                    $result = mysqli_query($connection, $query);
                                    if ($result->num_rows > 0) {
                                        while ($artistrow = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?php echo $artistrow['artist_id']; ?>"><?php echo $artistrow['artist_name']; ?>
                                            </option>

                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
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
        <?php include_once('components/footer.php'); ?>


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