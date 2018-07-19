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
                        <h3 class="box-title">Edit Lokasi CCAN Fulfillment</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?=form_open('dashboard/validasi_ccan_fulfillment') ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label>SID</label>
                            <input name="id" type="hidden" value="<?=$l['id'] ?>">
                            <input name="sid" type="text" class="form-control" value="<?=$l['sid'] ?>">
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
                            <textarea name="alamat" class="form-control"><?=$l['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>No Order</label>
                            <input name="no_order" type="text" class="form-control" value="<?=$l['no_order'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama ODP</label>
                            <input name="nama_odp" type="text" class="form-control" value="<?=$l['nama_odp'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Port</label>
                            <input name="port" type="text" class="form-control" value="<?=$l['port'] ?>">
                        </div>
                        <div class="form-group">
                            <label>SN ONT</label>
                            <input name="sn_ont" type="text" class="form-control" value="<?=$l['sn_ont'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Latittude</label>
                            <input name="lat" type="text" class="form-control" value="<?=$l['latittude'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input name="long" type="text" class="form-control" value="<?=$l['longitude'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"><?=$l['keterangan'] ?></textarea>
                        </div>
                    </div>

                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Valid</button>
                        <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                        <a href="<?=base_url().'dashboard/validasi_ccan_fulfillment_delete/'.$r->id  ?>" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                        <a href="<?=base_url().'dashboard/validasi_ccan_fulfillment' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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