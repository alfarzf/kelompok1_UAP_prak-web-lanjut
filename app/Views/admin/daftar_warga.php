<?= $this->extend('template/app_admin')?>
<?= $this->section('content')?>
            <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                    <!-- dashboard -->
                        <div class="wrapper wrapper-content animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                    Ini Halaman daftar warga
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama kepala keluarga</th>
      <th scope="col">Nik</th>
      <th scope="col">Blok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aninda Revi Oktaviani</td>
      <td>1801234567896</td>
      <td>P31</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Arpon Rilo Pambudi</td>
      <td>1801678904321</td>
      <td>D12</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Ariva Elwa Nanda</td>
      <td>1801678904321</td>
      <td>C16</td>
    </tr>
  </tbody>
</table>

<button type="button" class="btn btn-primary">tambah data</button>
<button type="button" class="btn btn-danger">Hapus</button>
<button type="button" class="btn btn-warning">Edit data</button>
</div>
<?= $this->endSection() ?>