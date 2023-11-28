<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/warga.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important; position: absolute;">
        <div class="container mx-auto px-5 mt-1" style="margin-bottom: 100px !important;">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="color: white; font-weight: bold;">Edit Warga</h2>
                </li>
            </ul>
            <form action="<?= base_url('/daftar_warga') ?>" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label" style="color: white;">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $warga['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label" style="color: white;">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="<?= $warga['nik'] ?>">
                </div>
                <div class="mb-3">
                    <label for="blok" class="form-label" style="color: white;">Blok</label>
                    <select type="text" class="form-control" id="blok" name="blok" style="background-color: transparent; color: black;">
                        <?php
                        foreach ($blok as $item) {
                        ?>
                            <option value="<?= $item['id'] ?>" style="color: black;" <?= ($item['id'] == $warga['id_blok']) ? 'selected' : '' ?>>
                                <?= $item['nama_blok'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label" style="color: white;">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $warga['alamat'] ?>">
                </div>
                <input type="hidden" name="id" value="<?= $warga['id'] ?>">
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
