<!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link waves-effect">
                <i class="fas fa-sign-out-alt mr-2"></i>Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
      <a class="waves-effect text-center">
        <img src="../img/default_logo.png" class="img-fluid" style="height: 50%;width: 50%">
      </a>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item waves-effect list-group-item-action <?php if($current == 'home') {echo 'active';} ?>">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
        <a href="users.php" class="list-group-item list-group-item-action waves-effect <?php if($current == 'users') {echo 'active';} ?>">
          <i class="fas fa-user mr-3"></i>Users <span class="badge badge-danger badge-pill pull-right">New</span></a>
        <a href="categories.php" class="list-group-item list-group-item-action waves-effect <?php if($current == 'categories') {echo 'active';} ?>">
          <i class="fas fa-tag mr-3"></i>Categories</a>
        <a href="courses.php" class="list-group-item list-group-item-action waves-effect <?php if($current == 'courses') {echo 'active';} ?>">
          <i class="fas fa-graduation-cap mr-3"></i>Courses</a>
        <a href="plugins/ckeditor/ckfinder/ckfinder.html" class="list-group-item list-group-item-action waves-effect <?php if($current == 'gallery') {echo 'active';} ?>">
          <i class="fas fa-file-upload mr-3"></i>Galley</a>
        <a href="settings.php" class="list-group-item list-group-item-action waves-effect <?php if($current == 'settings') {echo 'active';} ?>">
          <i class="fas fa-cog mr-3"></i>Settings</a>
      </div>
    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->