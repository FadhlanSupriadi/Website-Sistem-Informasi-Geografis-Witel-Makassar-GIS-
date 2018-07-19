    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Lokasi CCAN Fulfillment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?=form_open('dashboard/lokasi_ccan_fulfillment') ?>
              <div class="box-body">
                <div class="form-group">
                  <label>SID</label>
                  <input name="sid" type="text" class="form-control" placeholder="SID" required="">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" class="form-control select2" style="width: 100%;">
                    <?php foreach ($k->result() as $r) {
                      echo "<option value='$r->id'>$r->nama_kategori</option>";
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>No Order</label>
                  <input name="no_order" type="text" class="form-control" placeholder="No Order" required="">
                </div>
                  <div class="form-group">
                      <label>Nama ODP</label>
                      <input name="nama_odp" type="text" class="form-control" placeholder="Nama ODP" required="">
                  </div>
                  <div class="form-group">
                      <label>Port</label>
                      <input name="port" type="text" class="form-control" placeholder="Port" required="">
                  </div>
                  <div class="form-group">
                      <label>SN ONT</label>
                      <input name="sn_ont" type="text" class="form-control" placeholder="SN ONT" required="">
                  </div>
                <div class="form-group">
                  <label>Latittude</label>
                  <input name="lat" type="text" class="form-control" placeholder="-3.0291407" required="">
                </div>
                <div class="form-group">
                  <label>Longitude</label>
                  <input name="long" type="text" class="form-control" placeholder="120.2085258" required="">
                </div>
                  <div class="form-group">
                      <label>Keterangan</label>
                      <textarea name="keterangan" class="form-control" placeholder="Keterangan" required=""></textarea>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=base_url().'dashboard/lokasi_ccan_fulfillment' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>