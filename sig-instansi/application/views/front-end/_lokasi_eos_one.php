<div class="col-sm-12 content" style="padding-left:10px;">
    <div class="panel">

        <div class="panel-body" style="border:1px solid #ddd;padding: 0;">

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
                    $id = $this->uri->segment(3);
                    $as = $this->db->query("SELECT l.id, l.sid, l.nama_cc, l.datek_pe, l.datek_metro, l.datek_access, l.vlan, l.bandwidth, l.pic_customer, l.tanggal_input, l.tanggal_perbaikan, l.alamat, l.keterangan, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi_eos as l, kategori as k WHERE l.kategori=k.id AND l.id = $id");
                    foreach ($as->result() as $data) {
                    $sid                = $data->sid;
                    $nama_cc            = $data->nama_cc;
                    $datek_pe           = $data->datek_pe;
                    $datek_metro        = $data->datek_metro;
                    $datek_access       = $data->datek_access;
                    $vlan               = $data->vlan;
                    $bandwidth          = $data->bandwidth;
                    $pic_customer       = $data->pic_customer;
                    $tanggal_input      = $data->tanggal_input;
                    $tanggal_perbaikan  = $data->tanggal_perbaikan;
                    $alamat             = $data->alamat;
                    $keterangan         = $data->keterangan;
                    $lat                = $data->latittude;
                    $lon                = $data->longitude;
                    $icon               = $data->ikon;
                    ?>

                    var image = "<?php echo base_url().'uploads/icon/'.$icon ?> ";

                    <?php

                    echo ("addMarker($lat, $lon, '<b>$sid</b><br>$alamat<br>');\n");
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
    </div>
</div>
<!-- ./CONTENT -->

      
