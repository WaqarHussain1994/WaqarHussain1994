<?php
session_start();
if (!isset($_SESSION['user'])) {
   header("Location: login.php");
   exit();
}
?>


<div class="header_section">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="logo" href="index.php"><img src="images/logo.png" style="filter: brightness(0) saturate(100%);"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="music.php">Music</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="video.php">Videos</a>
            </li>
            <!-- <li class="nav-item">
               <a class="nav-link" href="album.html">Celebs</a>
            </li> -->
         </ul>
         <div class="search_icon"><a href="logout.php"><img src="images/user-icon.png"><span class="padding_left_15">logout</span></a></div>
         <!-- <div class="search_icon"><a href="#"><img src="images/search-icon.png"><span class="padding_left_15">Search...</span></a></div> -->
      </div>
   </nav>
</div>