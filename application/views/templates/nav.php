 <!-- Navbar -->
 <?php if($title == 'Index') { echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">';} else { echo '<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar top-nav-collapse">';} ?>

    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <strong>Logo</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto text-dark">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li id="navbar-static-tools" class="nav-item dropdown">
            <a class="nav-link waves-effect" href="<?php echo base_url(); ?>events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url(); ?>history">History</a>
          </li>
        </ul>
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="" class="nav-link waves-effect">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link waves-effect">
              <i class="fas fa-envelope"></i>
            </a>
          </li>
          <li id="navbar-static-tools" class="nav-item dropdown">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect border border-light rounded waves-light" target="_blank">
             <i class="fas fa-donate mr-2"></i>Donate
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->