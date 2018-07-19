
<!-- ./SIDEBAR -->

<div class="col-md-12 top">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Daftar Lokasi EOS</h3>
        </div>
        <div class="table-responsive" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th width="25%">SID</th>
                    <th>Nama CC</th>
                    <th>Datek PE</th>
                    <th>Datek Metro</th>
                    <th>Datek Access</th>
                    <th>Vlan</th>
                    <th>Bandwidth</th>
                    <th>PIC Customer</th>
                    <th>Tanggal Input</th>
                    <th>Tanggal Perbaikan</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th width="10%">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($le->result() as $r){ ?>
                    <tr>
                        <td><?=$no; ?></td>
                        <td><?=$r->sid ?></td>
                        <td><?=$r->nama_cc ?></td>
                        <td><?=$r->datek_pe ?></td>
                        <td><?=$r->datek_metro ?></td>
                        <td><?=$r->datek_access ?></td>
                        <td><?=$r->vlan ?></td>
                        <td><?=$r->bandwidth ?></td>
                        <td><?=$r->pic_customer ?></td>
                        <td><?=$r->tanggal_input ?></td>
                        <td><?=$r->tanggal_perbaikan ?></td>
                        <td><?=$r->alamat ?></td>
                        <td><?=$r->keterangan ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'web/lokasi_eos_one/'.$r->id ?>"><i class="fa fa-map-o"></i> View Map</a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-success btn-sm btn-flat" href="<?=prep_url().'www.google.com/maps/?q='.$r->latittude.','.$r->longitude ?>"target="_blank"><i class="fa fa-map-o"></i> Open Map</a>
                            </div>
                        </td>
                    </tr>
                    <?php $no++; } ?>
            </table>
        </div>
    </div>
</div>
<!-- ./CONTENT -->