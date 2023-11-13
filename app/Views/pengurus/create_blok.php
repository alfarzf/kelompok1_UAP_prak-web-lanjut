<?= $this->extend('template/app_pengurus')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Tambah Blok</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row white-bg">
                <div class="col-lg-8">
                    <div style='margin-top:20px; margin-bottom:20px;'>
                        <form action="<?= base_url('/pengurus/blok/store');?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                            <label for="nama_blok" class="form-label">Nama Blok : </label>
                            <input type="text" name="nama_blok" class="form-control" value='<?= old('nama_blok');?>'><br>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>