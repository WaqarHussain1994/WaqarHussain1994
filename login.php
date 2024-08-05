<?php

session_start();
if (isset($_SESSION['user'])) {
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Document</title>
</head>

<body>
  <section class="vh-100 sec1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-white">
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form action="loginProcess.php" method="POST" style="width: 23rem;">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example18">Email address</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <input data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block"
                  type="submit" value="Login"></input>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
              <button class="btn btn-primary "><a href="signin.php" class="text-white">
                  Sign in
                </a> </button>

            </form>

          </div>

        </div>
      </div>
    </div>
  </section>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>