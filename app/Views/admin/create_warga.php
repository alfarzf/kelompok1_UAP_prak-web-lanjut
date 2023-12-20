<?= $this->extend('template/app_admin')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Tambah Warga</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row white-bg">
                <div class="col-lg-8" style="padding-bottom:20px;">
                    <div style='margin-top:20px; margin-bottom:20px;'>
                        <form action="<?= base_url('/admin/daftar_warga/store');?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                            <label for="nama" class="form-label">Nama : </label>
                            <input type="text" name="nama" class="form-control" value='<?= old('nama');?>'>
                            <label for="nik" class="form-label">NIK : </label>
                            <input type="text" name="nik" class="form-control" value='<?= old('nik');?>'>
                            <label for="alamat" class="form-label">Alamat : </label>
                            <input type="text" name="alamat" class="form-control" value='<?= old('alamat');?>'><br>
                                <label for="blok" class="form-label">Blok : </label>
                                <select name="blok" id="nama_blok" class="form-select" style='width:200px;'>
                                    <option selected hidden value="<?= old('blok');?>">Pilih Blok</option>
                                    <?php foreach($blok as $item){
                                        ?>
                                        <option value="<?= $item['id']?>">
                                            <?= $item['nama_blok']?>
                                        </option>
                                    <?php
                                    }?>
                                </select>
                                <br>
                            </div>
                            <input type="submit" class="btn btn-primary" style="margin-top: 10px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>