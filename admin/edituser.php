<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound - Music And Video App</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index2.html" class="h1">Sound - Music And Video App</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Add User</p>
                <?php
                if (isset($_GET['msg'])) {
                    ?>
                    <p class="text-danger"><?php echo $_GET['msg']; ?></p>
                    <?php
                }
                ?>
                <?php
                require_once ('db.php');
                $query = "SELECT * from users where id=" . $_GET['id'];
                $result = mysqli_query($connection, $query);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                }

                ?>
                <form action="edituserprocess.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="id" hidden value="<?php echo $row['id']; ?>">

                        <input type="email" class="form-control" placeholder="Email" name="email"
                            value="<?php echo $row['email']; ?>" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username"
                            value="<?php echo $row['username']; ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="role" class="mx-2">Select Role</label>
                        <select name="role" id="role" class="mx-2" value="<?php echo $row['role']; ?>">Select Role
                            <option value="User" >User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Edit User</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>