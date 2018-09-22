<div class="content-wrapper">
  <br>
  <div class="container">
    <!-- Main content -->
    <h1>Edit Daerah</h1>
    <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-14">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#addRegion" data-toggle="tab">Edit Daerah</a></li>
            <li class=""><a href="#uploadPhoto" data-toggle="tab">Edit Foto</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="addRegion">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="masukan id sesuai pada cartoDB.com" name="id" value="<?php echo $region->id;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Kabupaten/Kota</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama wilayah" name="region_name" value="<?php echo $region->region_name;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama motif batik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama motif batik" name="batik_name" value="<?php echo $region->batik_name;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Penjelasan motif</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="masukan penjelasan motif batik" name="batik_explanation"><?php echo $region->batik_explanation;?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="updateRegion" value="updateRegion">Tambahkan Data</button>
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
