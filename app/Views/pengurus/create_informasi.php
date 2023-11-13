<?= $this->extend('template/app_pengurus')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Tambah Informasi</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row white-bg">
                <div class="col-lg-8">
                    <div style='margin-top:20px; margin-bottom:20px;'>
                        <form action="<?= base_url('/pengurus/informasi/store');?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                            <label for="judul_informasi" class="form-label">Judul : </label>
                            <input type="text" name="judul_informasi" class="form-control" value='<?= old('judul_informasi');?>'>
                            
                            <label for="deskripsi_informasi" class="form-label">Deskripsi : </label>
                            <input type="text" name="deskripsi_informasi" class="form-control" value='<?= old('deskripsi_informasi');?>'><br>
                            
                            <label for="blok" class="form-label">Blok : </label>
                            <select name="blok" id="blok" class="form-select">
                                <option selected hidden value="<?= old('blok');?>">Pilih Blok</option>
                                <?php foreach($bloks as $item){
                                    ?>
                                    <option value="<?= $item['id']?>">
                                        <?= $item['nama_blok']?>
                                    </option>
                                <?php
                                }?>
                            </select><br>
                            <br><label for="foto" class="form-label">Foto : </label>
                            <input type="file" name="foto" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>