<div class="content-wrapper">
  <br>
  <div class="container">
    <!-- Main content -->
    <h1>Edit Konten Web</h1>
    <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-14">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#region" data-toggle="tab">Wilayah</a></li>
            <li class=""><a href="#brand" data-toggle="tab">Produk</a></li>
            <li class=""><a href="#addRegion" data-toggle="tab">Tambah Wilayah Baru</a></li>
            <li class=""><a href="#addBrand" data-toggle="tab">Tambah Produk</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="region">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kota</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($region as $item) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $item->region_name; ?></td>
                      <td><a href="<?php echo base_url('editRegion/'.$item->id); ?>">Edit</a> | <a href="<?php echo base_url('deleteRegion/'.$item->id); ?>">Hapus</a></td>
                    </tr>
                    <?php $i++; endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Kota</th>
                      <th>Opsi</th>
                    </tr>
                  </tfoot>
                </table>

            </div>
            <div class="tab-pane" id="brand">

              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Daerah</th>
                    <th>Nama Merk</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($brand as $item) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $item->region_name; ?></td>
                      <td><?php echo $item->brand_name; ?></td>
                      <td><a href="<?php echo base_url('editBrand/'.$item->id); ?>">Edit</a> | <a href="<?php echo base_url('deleteBrand/'.$item->id); ?>">Hapus</a></td>
                    </tr>
                    <?php $i++; endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Daerah</th>
                      <th>Nama Merk</th>
                      <th>Opsi</th>
                    </tr>
                  </tfoot>
                </table>
            </div>

            <div class="tab-pane" id="addRegion">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="masukan id sesuai pada cartoDB.com" name="id" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Kabupaten/Kota</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama wilayah" name="region_name" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama motif batik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama motif batik" name="batik_name" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Penjelasan motif</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="masukan penjelasan motif batik" name="batik_explanation"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="addRegion" value="addRegion">Tambahkan Data</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="addBrand">
              <form class="form-horizontal" method="post">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Wilayah Motif Batik</label>
                  <div class="col-sm-10">
                    <select name="id_region" class="form-control select2" style="width: 100%;">
                      <?php foreach ($region as $item): ?>
                      <option value="<?php echo $item->id; ?>"><?php echo $item->region_name; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Merk Dagang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama merk" name="brand_name" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama Pemilik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="masukan nama pemilik merk batik" name="owner" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Alamat Perusahaan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="masukan Alamat Jelas dari perusahaan" name="address"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="addBrand" value="addBrand">Tambah Data</button>
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
