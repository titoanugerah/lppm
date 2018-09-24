<center>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-slide-to="0" class="active"></li>
    <li data-slide-to="1" class=""></li>
    <li data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url('./assets/carousel/'.$site->carousel_img_1); ?>" alt="First slide">
      <div class="carousel-caption">
        <?php echo $site->carousel_exp_1; ?>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('./assets/carousel/'.$site->carousel_img_2); ?>" alt="First slide">
      <div class="carousel-caption">
        <?php echo $site->carousel_exp_2; ?>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('./assets/carousel/'.$site->carousel_img_3); ?>" alt="First slide">
      <div class="carousel-caption">
        <?php echo $site->carousel_exp_3; ?>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="fa fa-angle-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="fa fa-angle-right"></span>
  </a>
</div>
</center>


<div class="content-wrapper">
  <br>

  <div class="container">
    <!--
    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>-->
    <div class="callout callout-info">
      <h4>Welcome</h4>

      <p><?php echo $site->web_explanation; ?></p>
      </div>

    <!-- Main content -->
    <section class="content">


      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Peta</h3>
        </div>
        <div class="box-body">
          <?php //echo $site->map_link; ?>
          <iframe width="100%" height="520" frameborder="0" src="https://titoanugerahm.carto.com/builder/ad764c4f-ab10-4ff7-8a09-edb22638b064/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
