<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo base_url('.'); ?>" class="navbar-brand"><b><?php echo $site->first_site_name; ?></b><?php echo $site->last_site_name; ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- /.navbar-collapse -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
          </div>
        </form>
        <!-- Messages: style can be found in dropdown.less-->

        <!-- Tasks Menu -->

        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="<?php echo base_url('./assets/adminlte/'); ?>/dist/img/user_img.png" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">Login</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
              <li class="user-header">
                <form method="post">
                <p class="hidden-xs" style="color:white;">Silahkan masuk sebagai admin</p>
                <div class="form-group has-feedback">
                  <input type="type" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group has-feedback">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <!--
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>-->
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="loginValidation" value="loginValidation">Sign In</button>
              </div>
            </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-custom-menu -->
  </div>
  <!-- /.container-fluid -->
</nav>
