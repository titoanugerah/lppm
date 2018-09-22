<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo base_url('.'); ?>" class="navbar-brand"><b><?php echo $site->first_site_name; ?></b><?php echo $site->last_site_name; ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

      <ul class="nav navbar-nav">
        <li class="<?php if($view_name=='home'){ echo "active";}?>"><a href="<?php echo base_url('.')?>">Beranda <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opsi<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url('configureDisplay'); ?>">Tampilan</a></li>
            <li><a href="<?php echo base_url('configureContent'); ?>">Konten</a></li>
<!--
            <li class="divider"></li>
            <li><a href="#">Laporan</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
-->          </ul>
        </li>
      </ul>


    </div>
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
            <span class="hidden-xs"><?php echo $this->session->userdata['fullname'];?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('./assets/adminlte/')?>dist/img/user_img.png" class="img-circle" alt="User Image">

              <p>
                <?php echo $this->session->userdata['fullname']." - ".$this->session->userdata['previlleges']; ?>
                <small>logged in</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('profil'); ?>" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-custom-menu -->
  </div>
  <!-- /.container-fluid -->
</nav>
