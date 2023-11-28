<?= $this->extend('template/app_pengurus')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Daftar Blok</h2>
    </div>
</div>
<div class="row wrapper">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
<div class="col-lg-8">
<div class="ibox-title table-responsive">
		<h5>Blok :</h5>
    <a class="btn btn-primary btn-sm pull-right" href="<?= base_url('pengurus/blok/create') ?>"><i class="fa fa-pencil-square-o"></i> Tambah Blok</a>
</div>
    <div class="ibox-content table-responsive">
        <table class="table table-stripped">
            <thead>
    <tr>
        <th>No. </th>
        <th>Blok</th>
        <th>Aksi</th>
    </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($bloks as $blok){
            ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $blok['nama_blok']?></td>
    <td><a href="<?= base_url('pengurus/blok/'.$blok['id']) ?>" class="btn btn-info">Detail</a> 
        <a href="<?= base_url('pengurus/blok/'.$blok['id']. '/edit') ?>" class="btn btn-warning">Edit</a> 
        <form action="<?= base_url('pengurus/blok/' . $blok['id']) ?>" method="post" style="display:inline-block;">
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