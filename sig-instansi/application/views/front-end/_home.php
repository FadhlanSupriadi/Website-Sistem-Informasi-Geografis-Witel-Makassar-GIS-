
<!-- Main content -->
<section class="content">

    <div class="row">

        <div class="col-md-12 top">
            <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body">

                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj-hFGBMNwgXz91WdQn5O1N6mgxKJcX1U&callback=initMap"></script>

                    <script>

                        var marker;
                        function initialize() {

                            // Variabel untuk menyimpan informasi (desc)
                            var infoWindow = new google.maps.InfoWindow;

                            //  Variabel untuk menyimpan peta Roadmap
                            var mapOptions = {
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }

                            // Pembuatan petanya
                            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                            // Variabel untuk menyimpan batas kordinat
                            var bounds = new google.maps.LatLngBounds();

                            // Pengambilan data dari database
                            <?php
                            $as = $this->db->query("SELECT l.id, l.sid, l.no_order, l.nama_odp, l.port, l.sn_ont, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi_ccan_fulfillment as l, kategori as k WHERE l.kategori=k.id");
                            foreach ($as->result() as $data) {
                            $sid   = $data->sid;
                            $no_order   = $data->no_order;
                            $nama_odp   = $data->nama_odp;
                            $port   = $data->port;
                            $sn_ont   = $data->sn_ont;
                            $alamat   = $data->alamat;
                            $lat    = $data->latittude;
                            $lon    = $data->longitude;
                            $icon   = $data->ikon;
                            ?>

                            var image = "<?php echo base_url().'uploads/icon/'.$icon ?> ";

                            <?php

                            echo ("addMarker($lat, $lon, '<b>$sid</b><br>$alamat');\n");
                            }

                            ?>

                            // Proses membuat marker
                            function addMarker(lat, lng, info) {
                                var lokasi_ccan_fulfillment = new google.maps.LatLng(lat, lng);
                                bounds.extend(lokasi_ccan_fulfillment);

                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: lokasi_ccan_fulfillment,
                                    icon:image
                                });
                                map.fitBounds(bounds);
                                bindInfoWindow(marker, map, infoWindow, info);
                            }

                            // Menampilkan informasi pada masing-masing marker yang diklik
                            function bindInfoWindow(marker, map, infoWindow, html) {
                                google.maps.event.addListener(marker, 'click', function() {
                                    infoWindow.setContent(html);
                                    infoWindow.open(map, marker);
                                });
                            }

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);

                    </script>
                    <div id="map-canvas" style="width: auto; height: 600px;"></div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

      <!-- ./CONTENT -->

      <div class="col-sm-12 top-footer">
        <div class="col-sm-4 left">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Berita Terbaru</h3>
            </div>
            <div class="panel-body">
            <?php
            foreach($bt->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h4>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 center">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Berita Popular</h3>
            </div>
            <div class="panel-body">
            <?php
            foreach($bp->result() as $r){ ?>
              <div class="media">
                <div class="media-left media-top">
                  <a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>">
                    <img class="media-object" src="<?=base_url().'uploads/berita/'.$r->gambar ?>" width="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?=base_url().'web/beritadetail/'.$r->id_berita ?>"><?=$r->judul ?></a> </h4>
                  <?=substr($r->isi_berita, 0,45)."..." ?>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4 right">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Contact</h3>
            </div>
            <div class="panel-body">
              <address>
                <strong>Alamat</strong><br>
                  Jl. Balaikota No.4, Bulo Gading 90171<br>
                  Makassar, Sulawesi Selatan
              </address>

              <address>
                <abbr title="Phone">HP :</abbr> ...<br>
                <abbr title="Phone">Email :</abbr> <a href="mailto:#">...</a><br>
                <abbr title="Phone">Website :</abbr> <a href="...">...</a>
              </address>
            </div>
          </div>
        </div>
      </div><!-- ./ TOP-FOOTER -->
