<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aptech Ecommerce | Products</title>

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
                            <h1>Edit Artist Details</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Artist Details</h3>

                        <div class="card-tools">
                            <a href="videoartist.php" class="btn btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> View Artist
                            </a>
                        </div>
                    </div>
                    <?php
                    require_once('db.php');
                    $query = "SELECT * from video_artist WHERE id=" . $_GET['id'];
                    $result = mysqli_query($connection, $query);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    ?>
                    <form action="editvideoartistprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="artist_name">Artist name</label>
                                <input required type="text" class="form-control" id="artist_name" name="artist_name" value="<?php echo $row['artist_name'] ?>">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="artist_name">Artist Image</label>
                                <br>
                                <input type="hidden" value="<?php echo $row['artist_img'] ?>" name="artist_image">
                                <img src="<?php echo $row['artist_img'] ?>" alt="" class="img-fluid" width="200" height="200">
                            </div>
                        </div>

                        <div class="card-body">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="artist_image_new" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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