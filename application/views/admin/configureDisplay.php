<div class="content-wrapper">
  <br>
  <div class="container">
    <!-- Main content -->
    <h1>Edit Tampilan Web</h1>
    <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-14">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#editIdentity" data-toggle="tab">Edit Identitas Web</a></li>
            <li class=""><a href="#editAppereance" data-toggle="tab">Edit Tampilan Web</a></li>
            <li class=""><a href="#editCarousel" data-toggle="tab">Edit Tampilan Carousel</a></li>
          </ul>
          <div class="tab-content">
            <!-- /.tab-pane -->

            <!-- /.tab-pane -->

            <div class="active tab-pane" id="editIdentity">
              <form class="form-horizontal" method="post">

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Depan Web</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan nama depan web" name="first_site_name" value="<?php echo $site->first_site_name; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Belakang Web</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan nama depan web" name="last_site_name" value="<?php echo $site->last_site_name; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Website</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="nama website" name="site_name" value="<?php echo $site->first_site_name.$site->last_site_name; ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="updateSiteIdentity" value="updateSiteIdentity">Simpan Data</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="editAppereance">
              <form class="form-horizontal" method="post">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tema Warna</label>
                  <div class="col-sm-10">
                    <select name="color_bar" class="form-control select2" style="width: 100%;">
                      <option value="green" <?php if ($site->color_bar=="green") { echo "selected";}?>>Hijau</option>
                      <option value="white" <?php if ($site->color_bar=="white") { echo "selected";}?>>Putih</option>
                      <option value="blue" <?php if ($site->color_bar=="blue") { echo "selected";}?>>Biru</option>
                      <option value="yellow" <?php if ($site->color_bar=="yellow") { echo "selected";}?>>Kuning</option>
                      <option value="red" <?php if ($site->color_bar=="red") { echo "selected";}?>>Merah</option>
                      <option value="purple" <?php if ($site->color_bar=="purple") { echo "selected";}?>>Ungu</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Keterangan Website</label>
                  <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="Keterangan Website" name="web_explanation" ><?php echo $site->web_explanation; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Link Peta</label>
                  <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="masukan Link Peta" name="map_link" ><?php echo $site->map_link; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="updateAppereance" value="updateAppereance">Simpan Data</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="editCarousel">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
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

              <br>
              <br>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pilihan Carousel</label>
                  <div class="col-sm-10">
                    <select name="carousel" class="form-control select2" style="width: 100%;">
                      <option value="1">Carousel 1</option>
                      <option value="2">Carousel 2</option>
                      <option value="3">Carousel 3</option>
                    </select>
                  </div>
                </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gambar Carousel</label>
                    <input type="file" name="carousel_img_">
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Keterangan Gambar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Keterangan Gambar" name="carousel_exp_" value="">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="uploadPhoto" value="uploadPhoto">Upload Foto</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
