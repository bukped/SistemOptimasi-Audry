<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Respon Catatan</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote-bs3.css')?>" rel="stylesheet">

    <style type="text/css">
        .note-editor{
            border: 1px solid #e5e6e7;
            min-height: 200px;
        }
    </style>

</head>

<body class="skin-1" onload="start();">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/avatar.png')?>" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Daftar Pengiriman</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_pelanggan')?>"><i class="fa fa-users"></i> <span class="nav-label">Daftar Koordinator</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Transportasi</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('daftar_kritik_saran')?>"><i class="fa fa-pencil-square"></i> <span class="nav-label">Catatan</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_faq')?>"><i class="fa fa-question-circle"></i> <span class="nav-label">FAQ</span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('username') ?></span>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout')?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Catatan</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if($kritik_saran != NULL) foreach($kritik_saran as $ks) { ?>
                                    <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Judul :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $ks['judul']; ?></p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Isi :</label>
                                        <div class="col-lg-9 form-control-static">
                                            <?php echo $ks['isi']; ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Waktu Catatan :</label>
                                        <div class="col-lg-9 form-control-static">
                                            <?php echo $ks['waktu_kritik_saran']; ?>
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

            <div class="row">
                <div class="col-lg-12">

                        <div class="ibox chat-view">

                            <div class="ibox-title">
                                <small class="pull-right text-muted">Pesan Terakhir: <span id="last-message"></span></small>
                                 Respon
                            </div>


                            <div class="ibox-content">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div id="chat_scroll" class="chat-discussion">

                                            <div id="chat"></div>

                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <form onsubmit="sendChat();return false;">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-9">
                                        <div class="chat-message-form">
                                            <div class="form-group">
                                                <input id="respon" class="form-control" name="message" placeholder="Tulis Pesan"  required>     
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="btn btn-w-m btn-primary col-lg-1" type="submit">Kirim Pesan</button>
                                    </div>
                                    </form>
                                </div>
                                <br>
                            </div>

                        </div>
                </div>

            </div>
        </div>  
        <div class="footer">
            <div class="pull-right">
                <strong>{elapsed_time} seconds</strong>
            </div>
            <div>
                <strong>Copyright</strong> Audry Febrisa Sidabutar &copy; 2023
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>

    <!-- SUMMERNOTE -->
    <script src="<?php echo base_url('assets/js/plugins/summernote/summernote.min.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ]
            });
        });

        var last = 0;
        var chatInterval;

        function start() {
            chatInterval = setInterval('loadChat();', 3000);
            loadChat();
        }

        function loadChat() {
            var xmlhttp;
            if(window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var objek = JSON.parse(xmlhttp.responseText);
                    for(var i = 0; i < objek.length; i++) {
                        if(objek[i].id_users != '1') {
                            document.getElementById("chat").innerHTML +=
                            '<div class="chat-message right">'+
                                '<img class="message-avatar" src="<?php echo base_url('assets/img/profile_small.jpg')?>">'+
                                '<div class="message">'+
                                    '<a class="message-author" href="#"> <?php echo $this->session->userdata('username'); ?> </a>'+
                                    '<span class="message-date">' + objek[i].waktu_respon + '</span>'+
                                    '<span class="message-content">'+
                                    objek[i].respon +
                                    '</span>'+
                                '</div>'+
                            '</div>';
                        }else {
                            document.getElementById("chat").innerHTML +=
                            '<div class="chat-message left">'+
                                '<img class="message-avatar" src="<?php echo base_url('assets/img/avatar.png')?>">'+
                                '<div class="message">'+
                                    '<a class="message-author" href="#"> Admin </a>'+
                                    '<span class="message-date">' + objek[i].waktu_respon + '</span>'+
                                    '<span class="message-content">'+
                                    objek[i].respon +
                                    '</span>'+
                                '</div>'+
                            '</div>';
                        }
                        document.getElementById("last-message").innerHTML = objek[i].waktu_respon;
                        last = objek[i].id_respon;

                        var chat_scroll = document.getElementById("chat_scroll");
                        chat_scroll.scrollTop = chat_scroll.scrollHeight;
                    }
                }
            }

            xmlhttp.open("GET","<?php echo site_url('daftar_kritik_saran/ambil_respon_kritik_saran/'.$this->uri->segment(3).'/')?>" + last, true);
            xmlhttp.send();
        }

        function sendChat() {
            var xmlhttp_kirim;
            if(window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp_kirim = new XMLHttpRequest();
            }
            else {
                // code for IE6, IE5
                xmlhttp_kirim = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp_kirim.onreadystatechange = function() {
                if (xmlhttp_kirim.readyState == 4 && xmlhttp_kirim.status == 200) {
                    var objek = JSON.parse(xmlhttp_kirim.responseText);
                    clearInterval(chatInterval);
                    loadChat();
                    chatInterval = setInterval('loadChat();',3000);
                    last = objek.last;
                    document.getElementById("respon").value = '';
                }
            }

            xmlhttp_kirim.open("GET","<?php echo site_url('daftar_kritik_saran/tambah_respon_kritik_saran/'.$this->uri->segment(3).'/')?>"+ document.getElementById('respon').value, true);
            xmlhttp_kirim.send();
        }
    </script>
</body>
</html>
