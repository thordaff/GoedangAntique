<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="<?= base_url('asset/css/toko.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <!-- <script src="<?= base_url('asset/vendor/ckeditor/ckeditor.js');?>"></script> -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex flex-row" style="background: brown;">
            <div class="container mt-3">
                <div class="header-content" style="margin-left: -100px;">
                    <img src="<?= base_url('asset/img-asset/NavbarImg.png');?>" alt="Logo" width="175">
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="d-flex flex-column sidebar mt-5 ms-3">
                <div class="container" style="border-right: 1px solid rgba(0, 0, 0, 0.5); height: 100vh;">
                    <div class="nav-header">
                        <h5 class="fw-bold">Navigasi</h5>
                    </div>
                    <div class="nav-item mt-4">
                        <a href="../" class="nav-link">Beranda</a>
                        <a href="../Toko/Dashboard" class="nav-link">Dashboard</a>
                        <a href="../Toko/Produk" class="nav-link">Produk</a>
                        <a href="" class="nav-link">Pesanan</a>
                        <a href="" class="nav-link">Laporan Penjualan</a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column content mt-5 ms-3">
                <div class="d-flex flex-row header-content mb-4">
                    <h5 class="fw-bold">Kelola Produk</h5>
                    <a href="#" type="button" class="ms-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah data</a>
                </div>
                <div class="body-content">
                    <table border="1" cellpadding="5" class="produk">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Foto Produk</th>
                            <th>Kontrol</th>
                        </tr>
                        <?php foreach($produk as $key => $p) :?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><?= $p['nama_barang']?></td>
                                <td>Rp. <?= $p['harga_barang']?></td>
                                <td><?= $p['jumlah_barang']?></td>
                                <td>
                                    <a type="button" class="btn btn-sm">Lihat Foto</a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="">Edit</a>
                                        <a href="">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ;?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('Tambah_data/produk');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="toko_id" id="toko_id" value="<?= $produkAdd['toko_id']?>">
                    <input type="hidden" name="toko_id" id="toko_id" value="<?= $produkAdd['nama_toko']?>">
                    <div class="d-flex foto-barang">
                        <input type="file" name="foto1" id="foto1">
                        <input type="file" name="foto2" id="foto2">
                    </div>
                    <div class="d-flex flex-column nama-barang">
                        <label for="nama_barang">Nama Produk</label>
                        <input type="text" name="nama_barang" id="nama_barang">
                    </div>
                    <div class="d-flex flex-column deskripsi">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" style="resize: none;"></textarea>
                    </div>
                    <div class="d-flex flex-column harga-barang">
                        <label for="harga_barang">Harga Produk</label>
                        <input type="number" name="harga_barang" id="harga_barang">
                    </div>
                    <div class="d-flex flex-column jumlah-barang">
                        <label for="jumlah_barang">Jumlah Produk</label>
                        <input type="number" name="jumlah_barang" id="jumlah_barang">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>