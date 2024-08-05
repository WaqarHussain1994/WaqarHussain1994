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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid text-white">
      <div class="row">
        <div class="col-sm-6 text-black">

          <!-- <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div> -->

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form action="signinProcess.php" method="post" style="width: 23rem;">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign in Form</h3>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example18" class="form-control form-control-lg" name="username" />
                <label class="form-label" for="form2Example18">User-Name</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
                <label class="form-label" for="form2Example18">Email address</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" name="role" value="User"
                  hidden />
                <!-- <label class="form-label" for="form2Example28">Password</label> -->
              </div>

              <div class="pt-1 mb-4">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block"
                  type="submit">Sign in</button>
              </div>

              <p class="small pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
              <button class="btn btn-primary "><a href="login.php" class="text-white">
                  Login if you Already have account
                </a> </button>

            </form>

          </div>

        </div>
      </div>
    </div>
  </section>


  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Section: Design Block -->
</body>

</html>