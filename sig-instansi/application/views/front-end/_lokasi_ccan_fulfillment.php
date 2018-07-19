
      <!-- ./SIDEBAR -->

      <div class="col-md-12 top">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Lokasi CCAN Fulfillment</h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th width="25%">SID</th>
                    <th>No Order</th>
                    <th>Nama ODP</th>
                    <th>Port</th>
                    <th>SN ONT</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th width="10%">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($la->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$r->sid ?></td>
                    <td><?=$r->no_order ?></td>
                    <td><?=$r->nama_odp ?></td>
                    <td><?=$r->port ?></td>
                    <td><?=$r->sn_ont ?></td>
                    <td><?=$r->alamat ?></td>
                    <td><?=$r->keterangan ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'web/lokasi_ccan_fulfillment_one/'.$r->id ?>"><i class="fa fa-map-o"></i> View Map</a>
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