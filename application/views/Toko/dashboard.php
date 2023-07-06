<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="../../../asset/css/toko.css">
        <link rel="stylesheet" href="<?= base_url('asset/css/toko.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex flex-row" style="background: brown;">
            <div class="d-flex container pt-3 pb-3">
                <div class="header-content mx-auto">
                    <img src="<?= base_url('asset/img-asset/NavbarImg.png');?>" alt="Logo" width="175">
                </div>
            </div>
        </div>
        <div class="d-flex ">
            <div class="d-flex flex-column sidebar mt-5 ms-3">
                <div class="container" style="border-right: 1px solid rgba(0, 0, 0, 0.5); height: 100vh;">
                    <div class="nav-header">
                        <h5 class="fw-bold">Navigasi</h5>
                    </div>
                    <div class="nav-item mt-4">
                        <a href="<?= base_url('Beranda');?>" class="nav-link">Beranda</a>
                        <a href="<?= base_url('Toko/Dashboard');?>" class="nav-link">Dashboard</a>
                        <a href="../Toko/Produk" class="nav-link">Produk</a>
                        <a href="" class="nav-link">Pesanan</a>
                        <a href="" class="nav-link">Laporan Penjualan</a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column content mt-5 ms-3">
                <div class="header-content mb-4">
                    <h5 class="fw-bold">Dashboard</h5>
                </div>
                <div class="body-content">
                    <div class="card" style="width: 67em;">
                        <div class="card-header">
                            <h6 class="fw-bold">Profil Toko</h5>
                        </div>
                        <div class="card-body">
                            <table class="profil-dashboard" cellpadding="8">
                                <tr>
                                    <td>
                                        <?php if ($toko === null || $toko['nama_toko'] === null) { ?>
                                            Belum ada Toko Terdaftar
                                            <hr>
                                        <?php } else { ?>
                                            <?php if ($toko === null || $toko['foto_toko'] === null) { ?>
                                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdropLogo">
                                                    <div class="d-flex flex-column btn-img" style="background: grey;width: 10em;height: 10em;">
                                                        <p class="text-center fw-bold mt-4" style="width: 100%;color: black;text-decoration: none;">Belum ada Foto</p>
                                                        <small><p class="text-center">Klik untuk menambahkan foto</p></small>
                                                    </div>
                                                </a>
                                            <?php } else { ?>
                                                <img src="<?= base_url().'/Image/'.$toko['nama_toko'].'/'.$toko['foto_toko'] ?>" alt="Logo" width="100">
                                            <?php } ?>  
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Toko</td>
                                    <td>:</td>
                                    <td>
                                        <?php if ($toko === null || $toko['nama_toko'] === null) { ?>
                                            Belum ada Toko Terdaftar
                                        <?php } else { ?>
                                            <?= $toko['nama_toko'] ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Bergabung</td>
                                    <td>:</td>
                                    <td>
                                        <?php if ($toko == null|| $toko['tanggal'] == null) { ?>
                                            Belum Ada Toko Terdaftar
                                        <?php } else { ?>
                                            <?= $toko['tanggal'] ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?$tampil?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex card-footer">
                            <div class="edit-profile ms-auto">
                                <?php if ($toko === null || $toko['user_id'] == NULL) {?>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn">
                                        Tambah Data
                                    </a>
                                <?php } else {?>
                                    Edit
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Modal Nama Toko -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo form_open_multipart('Tambah_data/Toko'); ?>
                <div class="modal-body">
                    <div class="user_id">
                        <input type="hidden" name="user_id" id="user_id" value="<?= $user['id_user']?>">
                    </div>
                    <div class="d-flex flex-column nama-toko">
                        <label for="foto_toko">Logo</label>
                        <input type="file" name="foto_toko" id="foto_toko">
                    </div>
                    <div class="d-flex flex-column nama-toko">
                        <label for="nama_toko">Nama Usaha</label>
                        <input type="text" name="nama_toko" id="nama_toko">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Kirim</button> 
                </div>
            <?php echo form_close()?>
        </div>
    </div>
</div>