<div class="content-wrapper">
  <br>
  <div class="container">
    <!-- Main content -->
    <h1>Edit Merk</h1>
    <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-14">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#editBrand" data-toggle="tab">Edit Merk</a></li>
            <li class=""><a href="#editLogo" data-toggle="tab">Logo</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="editBrand">
              <form class="form-horizontal" method="post">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Wilayah Motif Batik</label>
                  <div class="col-sm-10">
                    <select name="id_region" class="form-control select2" style="width: 100%;">
                      <?php foreach ($region as $item): ?>
                      <option value="<?php echo $item->id; ?>" <?php if ($item->id == $brand->id_region) {echo "selected"; } ?>><?php echo $item->region_name; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Merk Dagang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama merk" name="brand_name" value="<?php echo $brand->brand_name;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Pemilik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama pemilik merk batik" name="owner" value="<?php echo $brand->owner; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Alamat Perusahaan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="masukan Alamat Jelas dari perusahaan" name="address"><?php echo $brand->address; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="updateBrand" value="updateBrand">Perbaharui Data</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="editLogo">
              <center>
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <img src="<?php echo base_url('./assets/brand/').$brand->brand_img; ?>" alt="">
              </center>
              <br>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Gambar Carousel</label>
                <input type="file" name="img">
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success" name="uploadLogo" value="uploadLogo">Upload Logo</button>
                </div>
              </div>

                <br>
                <br>
                <br>

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
