<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transportasi | Profil</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
</head>

<body class="skin-1">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/profile_small.jpg')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_pelanggan') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('profil')?>"><i class="fa fa-user"></i> <span class="nav-label">Profil</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Pengiriman</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Transportasi</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('kritik_saran')?>"><i class="fa fa-pencil-square"></i> <span class="nav-label">Catatan</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('faq')?>"><i class="fa fa-question-circle"></i> <span class="nav-label">FAQ</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
                </li>
            </ul>

        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('nama_peserta') ?></span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout')?>">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->session->flashdata('hasil'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Profil</h5>
                                <div class="text-right">
                                    <button class="btn btn-info dim" onclick="location.href='<?php echo site_url('profil/edit_profil/')?>'" type="button"><i class="fa fa-edit"></i> Edit Profil</button>
                                </div>
                            </div>
                            <div class="ibox-content" style="background-color: white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach ($profil as $p) { ?>
                                        <div class="row form-horizontal">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Data Akun</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Username :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['username']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Password :</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" value="8e4fd0d42fab8ab8a16f0a36f129497f" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Data Pribadi</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nama Lengkap :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['nama_pelanggan']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">No Telepon :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['no_telp']; ?>" readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="col-lg-2 control-label">FAX :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['fax']; ?>" readonly>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Email :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['email']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Alamat :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" value="<?php echo $p['alamat']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    <strong>{elapsed_time} detik</strong>
                </div>
                <div>
                    <strong>Copyright</strong> Audry Febrisa Sidabutar &copy; 2023
                </div>
            </div>

        </div>

     <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.rangking').DataTable({
                "order": [2, "asc"],
                "iDisplayLength": 25,
                "paging":   false,
                "searching": false,
                "info":     false,
                "columnDefs": [ {
                    "targets"  : [0,1,2]
                    // "orderable": false,
                }]
            });
        });
    </script>

</body>

</html>
