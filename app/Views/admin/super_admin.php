<?= $this->extend('template/app_admin')?>
<?= $this->section('content')?>
            <!-- Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                    <!-- dashboard -->
                        <div class="wrapper wrapper-content animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                Ini Halaman Super Admin
    <div class="container">
        <h1>Super Admin</h1>
        <form action="submit.php" method="post">
            <label for="nama" class='form-label'>Nama Warga:</label>
            <input type="text" id="nama" name="nama" class='form-control'>
            <br>
            <label for="nomor_rumah">Nomor Rumah:</label>
            <input type="text" id="nomor_rumah" name="nomor_rumah">
            <br>
            <label for="jumlah_pembayaran">Jumlah Pembayaran:</label>
            <input type="number" id="jumlah_pembayaran" name="jumlah_pembayaran" required>

            <input type="submit" value="Tambah">
        </form>
    </div>
    <div class="container">
        <h1>Informasi Laporan Pembayaran</h1>
        <!-- Tabel untuk menampilkan informasi laporan pembayaran -->
        <table>
            <tr>
                <th>Nama Warga</th>
                <th>Nomor Rumah</th>
                <th>Jumlah Pembayaran</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Nama 1</td>
                <td>Rumah 1</td>
                <td>1000</td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <!-- Data laporan pembayaran dapat ditampilkan di sini -->
        </table>
    </div>
    <div class="container">
        <h1>Daftar Warga</h1>
        <!-- Tabel untuk menampilkan data warga -->
        <table>
            <tr>
                <th>Nama Warga</th>
                <th>Nomor Rumah</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Nama 1</td>
                <td>Rumah 1</td>
                <td>Jalan ABC 123</td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <!-- Data warga dapat ditampilkan di sini -->
        </table>
    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?= $this->endSection() ?>