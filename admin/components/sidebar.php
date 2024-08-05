<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light ">SOUND - <br>The Music And Video App</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $_SESSION['user']['username']; ?> - <?php echo $_SESSION['user']['role']; ?>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="users.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="music.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Music
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="video.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Video
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="album.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Album
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="artist.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Music Artist
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="videoartist.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Video Artist
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="musicgenre.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Music Genre
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="videogenre.php" class="nav-link active">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Video Genre
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>