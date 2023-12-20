<?= $this->extend('template/app_warga')?>
<?= $this->section('content')?>
            <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                    <!-- dashboard -->
                        <div class="wrapper wrapper-content animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="card">
                                            <h1><b> Informasi Warga!</b></h1>
                                            <?php foreach($informasi as $info):?>
                                            <div class="d-flex p-3 m-3">
                                                <div class="d-flex justify-content-center align-items-center " style="background:#FAF9F6;width:80%;margin:5vh 0;border:1px solid black;border-radius:25px;padding:5%;">
                                                    <div class="d-flex flex-row" style="width:100%;display:flex;margin-bottom:15%;">
                                                        <div class="d-flex flex-column" style="padding-top:5%;width:40%;">
                                                         <h1><?= $info['judul_informasi'] ?></h1>
                                                         <h2>Blok <?= $info['nama_blok'] ?></h2>
                                                        </div>
                                                        <img src="<?= $info['foto'] ?>"  alt="..." style="width:400px;height:230px;border-radius:25px;margin:10px;object-fit:cover;display:flex;position:absolute;left:30%; ">
                                                    </div>
                                                    
                                                    <p style="line-height:25px;"><?= $info['deskripsi_informasi'] ?></p>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?= $this->endSection() ?>