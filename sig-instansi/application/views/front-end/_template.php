<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIG Witel Makassar</title>
    <link href="<?php echo base_url().'assets/dist/img/favorit.png' ?>" rel="shortcut icon" type="image/ico" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>bootstrap/css/bootstrap.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Archivo+Narrow|Play|Ubuntu+Condensed|Droid+Sans" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>dist/css/costum.css">
</head>
<body onload="initialize()">
<!-- <body onload="peta_awal()"> -->
<div class="container bg_content">
    <div class="container">

        <div class="col-sm-12 header">
            <img src="<?=base_url().'uploads/' ?>imgheader.jpg" class="img-responsive">
        </div><!-- ./ HEADER -->

        <div class="col-sm-12 header-menu">
            <ul class="nav navbar-nav">
                <li><a href="<?=base_url().'web' ?>"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?=base_url().'web/berita' ?>"><i class="fa fa-newspaper-o"></i> Berita</a></li>
                <li><a href="<?=base_url().'web/input_ccan_fulfillment' ?>"><i class="fa fa-pencil"></i> Input CCAN Fulfilment</a></li>
                <li><a href="<?=base_url().'web/lokasi_ccan_fulfillment' ?>"><i class="fa fa-map-o"></i> CCAN Fulfilment</a></li>
                <li><a href="<?=base_url().'web/lokasi_ccan_assurance' ?>"><i class="fa fa-map-o"></i> CCAN Assurance</a></li>
                <li><a href="<?=base_url().'web/lokasi_eos' ?>"><i class="fa fa-map-o"></i> EOS</a></li>
                <li><a href="<?=base_url().'web/direction' ?>"><i class="fa fa-map-marker"></i> Cari Rute</a></li>
                <li><a href="<?=base_url().'web/komentar' ?>"><i class="fa fa-comments-o"></i> Komentar</a></li>
                <li><a href="<?=base_url().'web/profil' ?>"><i class="fa fa-suitcase"></i> Profil</a></li>
            </ul>
        </div><!-- ./ HEADER-MENU -->

        <?php echo $contents ?>

        <div class="col-sm-12 bottom-footer">
            Page rendered in <b>{elapsed_time}</b> seconds. Version <b>1.0</b><br>
            Sistem Informasi Geografis Witel Makassar<br>
            Copyright © 2018, Develop By CCAN Witel Makassar 2018
        </div>
        <!-- ./ BOTTOM-FOOTER -->
    </div>
</div>


<!-- jQuery 2.2.3 -->
<script src="<?=base_url().'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?=base_url().'assets/' ?>bootstrap/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url().'assets/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        //Initialize Select2 Elements
        $(".select2").select2();
    });
</script>
</body>
</html>