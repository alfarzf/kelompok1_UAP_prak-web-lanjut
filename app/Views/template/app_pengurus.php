<!DOCTYPE html>
<!-- Developed By Ichwan Almaza Ilmu Komputer 2014 -->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="https://e-kkn.unila.ac.id/loginStyle/assets/img/unila.png">
    <link rel="icon" type="image/png" href="https://e-kkn.unila.ac.id/loginStyle/assets/img/unila.png">
    <title>Sistem Informasi Warga</title>

    <!-- <meta name="csrf-token" content="hylrLk5vZHOOK2PVFsidJ2uZjAnBFL3G0d7d2IOr"> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <link href="https://e-kkn.unila.ac.id/css/app.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/style.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/animate.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/sweetalert.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/FootTable/footable.core.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <!-- <script>
        window.Laravel = {"csrfToken":"hylrLk5vZHOOK2PVFsidJ2uZjAnBFL3G0d7d2IOr"};
    </script> -->
</head>

<body>
    <script type="text/javascript" src="https://e-kkn.unila.ac.id/js/app.js"></script>
<div id="wrapper">
        <!-- sidebar  -->
    <aside style='position: fixed;'>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" height="50" width="50" src="https://e-kkn.unila.ac.id/file/Biodata/2117051003_Januari_2024_2023-09-26_11-12-06.png" />
                        </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Alfa Rizki Fadlillah</strong>
                        </span> <span class="text-muted text-xs block">Option <b class="caret"></b></span> </span> </a>
                                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        SIWa
                    </div>
                </li>
                <li class="">
                    <a href="<?= base_url('/pengurus') ?>"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li class="">
                    <a href="<?= base_url('/pengurus/informasi') ?>"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Informasi</span></a>
                </li>
                <li class="">
                    <a href="<?= base_url('/pengurus/laporan') ?>"><i class="fa fa-file-text-o"></i> <span class="nav-label">Laporan</span></a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label">Pembayaran</span></a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Daftar Warga</span></a>
                </li>
                <li class="">
                    <a href="<?= base_url('/pengurus/blok') ?>"><i class="fa fa-list"></i> <span class="nav-label">Daftar Blok</span></a>
                </li>
            </ul>
        </div>
    </nav>
    </aside>
</div>

<div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- header -->
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Sistem Informasi Warga</span>
                </li>
                <li>
                    <a href="<?= base_url('/logout') ?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
</div>

            <!-- Page Header -->
            <?= $this->renderSection('content') ?>
    <script src="https://e-kkn.unila.ac.id/js/sweetalert2.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111710111-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-111710111-1');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#pelapor').select2();
        });
    </script>
</body>
</html>