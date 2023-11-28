<?= $this->extend('template/app_pengurus')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Edit Laporan</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row white-bg">
                <div class="col-lg-8">
                    <div style='margin-top:20px; margin-bottom:20px;'>
                        <form action="<?= base_url('/pengurus/laporan/'.$laporan['id']);?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value='PUT'>
                            <label for="status_laporan" class="form-label">Status : </label>
                            <select name="status_laporan" id="status_laporan" class="form-select">
                                <option selected hidden value="<?= $laporan['status_laporan'];?>">Pilih Status</option>
                                <option value="Belum Terverifikasi">
                                    Belum Terverifikasi
                                </option>
                                <option value="Sudah Terverifikasi">
                                    Sudah Terverifikasi
                                </option>
                            </select>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>