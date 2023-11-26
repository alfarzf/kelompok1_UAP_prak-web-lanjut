
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
    <link href="https://e-kkn.unila.ac.id/css/app.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/style.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/animate.css" rel="stylesheet">
    <link href="https://e-kkn.unila.ac.id/css/sweetalert.css" rel="stylesheet">
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
                <li class="active">
                    <a href="<?= base_url('/admin') ?>"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Informasi</span></a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Laporan</span></a>
                </li>
                <li class="">
                    <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label">Pembayaran</span></a>
                </li>
                <li class="">
                    <a href="<?= base_url('/admin/daftar_warga') ?>"><i class="fa fa-list"></i> <span class="nav-label">Daftar Warga</span></a>
                </li>
                <li class="">
                    <a href="<?= base_url('/admin/add_akun') ?>"><i class="fa fa-list"></i> <span class="nav-label">Add Akun</span></a>
                </li>
            </ul>
        </div>
    </nav>
    </aside>
</div>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?=lang('Auth.register')?></h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="group">Role : </label>
                            <select name="group">
                                <option value="user">Warga</option>
                                <option value="admin">pengurus</option>
                            </select>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                    </form>


                    <hr>

                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>