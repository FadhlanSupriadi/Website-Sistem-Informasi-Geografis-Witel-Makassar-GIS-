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
                        <h3 class="box-title">Edit Lokasi EOS</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?=form_open('dashboard/lokasi_ccan_fulfillment') ?>
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
                            <label>Nama CC</label>
                            <input name="nama_cc" type="text" class="form-control" value="<?=$l['nama_cc'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Datek PE</label>
                            <input name="datek_pe" type="text" class="form-control" value="<?=$l['datek_pe'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Datek Metro</label>
                            <input name="datek_metro" type="text" class="form-control" value="<?=$l['datek_metro'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Datek Access</label>
                            <input name="datek_access" type="text" class="form-control" value="<?=$l['datek_access'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Vlan</label>
                            <input name="vlan" type="text" class="form-control" value="<?=$l['vlan'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Bandwidth</label>
                            <input name="bandwidth" type="text" class="form-control" value="<?=$l['bandwidth'] ?>">
                        </div>
                        <div class="form-group">
                            <label>PIC Customer</label>
                            <input name="pic_customer" type="text" class="form-control" value="<?=$l['pic_customer'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Input</label>
                            <input name="tanggal_input" type="text" class="form-control" value="<?=$l['tanggal_input'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Perbaikan</label>
                            <input name="tanggal_perbaikan" type="text" class="form-control" value="<?=$l['tanggal_perbaikan'] ?>">
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
                        <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                        <a href="<?=base_url().'dashboard/lokasi_eos' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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