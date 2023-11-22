<?= $this->extend('template/app_pengurus')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Daftar Laporan</h2>
    </div>
</div>
<div class="row wrapper">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
<div class="col-lg-12">
<div class="ibox-title table-responsive">
		<h5>Blok :</h5>
    <a class="btn btn-primary btn-sm pull-right" href="<?= base_url('pengurus/laporan/create') ?>"><i class="fa fa-pencil-square-o"></i> Tambah laporan</a>
</div>
    <div class="ibox-content table-responsive">
        <table class="table table-stripped" style='word-wrap: break-word; table-layout: fixed;'>
            <thead>
                <tr>
                    <th scope="col" style="width:5%">No. </th>
                    <th scope="col" style="width:15%">Jenis</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col" style="width:5%">Pelapor</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($laporans as $laporan){
            ?>
            <tr>
                
            <th scope="row"><?= $no++ ?></th>
            <td><?= $laporan['jenis_laporan']?></td>
            <td><?= $laporan['deskripsi_laporan']?></td>
            <td><?= $laporan['nama']?></td>
            <td><?= $laporan['status_laporan']?></td>
            <td><a href="<?= base_url('pengurus/laporan/'.$laporan['id']) ?>" class="btn btn-info">Detail</a> 
                <a href="<?= base_url('pengurus/laporan/'.$laporan['id']. '/edit') ?>" class="btn btn-warning">Edit</a> 
                <form action="<?= base_url('pengurus/laporan/' . $laporan['id']) ?>" method="post" style="display:inline-block;">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type='submit' class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
				    </div>
</div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>