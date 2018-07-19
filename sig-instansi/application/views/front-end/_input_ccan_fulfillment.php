<div class="col-md-12 top">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Lokasi CCAN Fulfillment</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="<?=base_url().'web/input_ccan_fulfillment'?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">SID</label>
                    <div class="col-sm-10">
                        <input name="sid" type="text" class="form-control" placeholder="SID" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                    <select name="kategori" class="form-control" style="width: 100%;" required="">
                        <?php foreach ($k->result() as $r) {
                            echo "<option value='$r->id'>$r->nama_kategori</option>";
                        } ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No Order</label>
                    <div class="col-sm-10">
                        <input name="no_order" type="text" class="form-control" placeholder="Nomor Order" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama ODP</label>
                    <div class="col-sm-10">
                        <input name="nama_odp" type="text" class="form-control" placeholder="Nama ODP" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Port</label>
                    <div class="col-sm-10">
                        <input name="port" type="text" class="form-control" placeholder="Port" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">SN ONT</label>
                    <div class="col-sm-10">
                        <input name="sn_ont" type="text" class="form-control" placeholder="SN ONT" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Latittude</label>
                    <div class="col-sm-10">
                        <input name="latittude" type="text" class="form-control" placeholder="Latittude" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Longitude</label>
                    <div class="col-sm-10">
                        <input name="longitude" type="text" class="form-control" placeholder="Longitude" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="keterangan" class="form-control" placeholder="Keterangan" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button name="input" type="submit" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i> Input Data</button>
                        <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-retweet"></i> Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>