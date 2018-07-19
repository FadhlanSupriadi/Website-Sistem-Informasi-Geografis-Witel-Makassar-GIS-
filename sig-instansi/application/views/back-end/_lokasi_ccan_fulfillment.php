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
                  <h3 class="box-title">Daftar Lokasi CCAN Fulfillment</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th width="15%">SID</th>
                        <th>No Order</th>
                        <th>Nama ODP</th>
                        <th>Port</th>
                        <th>SN ONT</th>
                        <th>Alamat</th>
                        <th width="13%">Latittude</th>
                        <th width="13%">Longitude</th>
                        <th>Keterangan</th>
                        <th width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($l->result() as $r){ ?>
                    <tr>
                        <td><?=$no; ?></td>
                        <td><?=$r->sid ?></td>
                        <td><?=$r->no_order ?></td>
                        <td><?=$r->nama_odp ?></td>
                        <td><?=$r->port ?></td>
                        <td><?=$r->sn_ont ?></td>
                        <td><?=$r->alamat ?></td>
                        <td><?=$r->latittude ?></td>
                        <td><?=$r->longitude ?></td>
                        <td><?=$r->keterangan ?></td>
                        <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_ccan_fulfillment_edit/'.$r->id ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=base_url().'dashboard/lokasi_ccan_fulfillment_delete/'.$r->id ?>"><i class="fa fa-trash"></i> </a>
                      </div>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>