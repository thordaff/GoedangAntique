<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="../../../asset/css/toko.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex flex-row" style="background: brown;">
            <div class="container mt-3">
                <div class="header-content" style="margin-left: -100px;">
                    <img src="../../../asset/img-asset/NavbarImg.png" alt="Logo" width="175">
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
                        <a href="" class="nav-link">Beranda</a>
                        <a href="" class="nav-link">Produk</a>
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
                    <table border="1" cellpadding="5">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Kontrol</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Keris Sakti</td>
                            <td>Rp. 150.000 </td>
                            <td>30</td>
                            <td>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="">Edit</a>
                                    <a href="">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>