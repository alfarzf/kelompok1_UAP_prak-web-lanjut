<?= $this->extend('template/app_warga')?>
<?= $this->section('content')?>

<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Data Laporan</h2>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row white-bg">
                <div class="col-lg-8">
                    <div style='margin-top:20px; margin-bottom:20px;'>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= base_url('/warga/laporan/create');?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label class="form-label">Jenis Laporan</label>
                                <div class="input-group">
                                    <select class="form-select" name="jenis_laporan" id="jenis_laporan">
                                        <option selected disabled>Choose...</option>
                                        <option value="kegaduhan">Laporan Kegaduhan</option>
                                        <option value="surat_keterangan">Pengajuan Surat Keterangan</option>
                                        <option value="lapor_tamu">Lapor Tamu</option>
                                        <option value="lapor_satpam">Lapor Satpam</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    <input type="" class="form-control" id="jenis_laporan_text" name="jenis_laporan_text" value="<?= old('jenis_laporan_text');?>" placeholder="Other">
                                </div>
                            </div>
                            
                            <label for="isi_laporan" class="form-label">Laporan </label>
                            <textarea name="deskripsi_laporan" class="form-control"><?= old('isi_laporan');?></textarea><br>

                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Update the input field with the selected option
    document.getElementById('jenis_laporan').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex].text;
        document.getElementById('jenis_laporan_text').value = selectedOption;
    });
</script>

<?= $this->endSection() ?>
