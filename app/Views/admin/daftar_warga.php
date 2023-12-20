<?= $this->extend('template/app_admin')?>
<?= $this->section('content')?>
<!-- Page Header -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
    <h2>Daftar Warga</h2>
    </div>
</div>
<div class="row wrapper">
    <div class="col-lg-12">
    <!-- dashboard -->
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
<div class="col-lg-12">
<div class="ibox-title table-responsive">
		<h5>Daftar Warga :</h5>
        <a class="btn btn-primary btn-sm pull-right" href="<?= base_url('admin/warga/create') ?>"><i class="fa fa-pencil-square-o"></i> Tambah Warga</a>
    
</div>
    <div class="ibox-content table-responsive">
        <table class="table table-stripped" style='word-wrap: break-word; table-layout: fixed;'>
            <thead>
                <tr>
                    <th scope="col" style="width:5%">No. </th>
                    <th scope="col" style="width:15%">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" style="width:10%">Blok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($warga as $w){
            ?>
            <tr>
                
            <th scope="row"><?= $no++ ?></th>
            <td><?= $w['nik']?></td>
            <td><?= $w['nama']?></td>
            <td><?= $w['alamat']?></td>
            <td><?= $w['nama_blok']?></td>
            <td> <a href="<?= base_url('admin/daftar_warga/'.$w['id']. '/edit') ?>" class="btn btn-warning">Edit</a> 
                <form action="<?= base_url('admin/daftar_warga/' . $w['id']) ?>" method="post" style="display:inline-block;">
                <?php csrf_field(); ?>
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