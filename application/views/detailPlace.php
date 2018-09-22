<center>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-slide-to="0" class="active"></li>
      <li data-slide-to="1" class=""></li>
      <li data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url('./assets/batik/'.$region->img_path_1); ?>" alt="First slide">
        <div class="carousel-caption">
          Motif Batik 1
        </div>
      </div>
      <div class="item">
        <img src="<?php echo base_url('./assets/batik/'.$region->img_path_2); ?>" alt="Second slide">
        <div class="carousel-caption">
          Motif Batik 2
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
<br>
<br>
  <div class="container">
    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h4><?php echo $region->batik_name; ?></h4>
        <p><?php echo $region->batik_explanation; ?></p>
      </div>


      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Merk Branding <?php echo $region->batik_name; ?></h3>
        </div>
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Merk</th>
                  <th>Pemilik</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($brand as $item) : ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item->brand_name; ?></td>
                    <td><?php echo $item->owner; ?></td>
                    <td><?php echo $item->address; ?></td>
                  </tr>
                  <?php $i++; endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama Merk</th>
                    <th>Pemilik</th>
                    <th>Alamat</th>
                  </tr>
                </tfoot>
              </table>
            </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
