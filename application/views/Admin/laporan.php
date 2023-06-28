<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="../../asset/css/admin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="dashboard">
            <div class="d-flex flex-row">
                <div class="sidebar">
                    <div class="container">
                        <div class="logo mt-3">
                            <img src="../../asset/img-asset/NavbarImg.png" alt="Logo" width="175">
                        </div>
                        <div class="navigation mt-5">
                            <small><p class="text-light">Admin Panel</p></small>
                            <div class="nav">
                                <ul>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#">Total Toko</a>
                                    </li>
                                    <li>
                                        <a href="#">Laporan Penjualan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="account-setting">
                            <small><p class="text-light">Kelola Akun</p></small>
                            <div class="nav">
                                <ul>
                                    <li>
                                        <a href="#">Akun</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="control-account">
                            <small><p class="text-light">Kontrol</p></small>
                            <div class="nav">
                                <ul>
                                    <li>
                                        <a href="../../Logout">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container ms-3 mt-4 p-2">
                    <div class="path d-lex flex-column">
                        <h5 class="fw-bold">Lokasi</h5>
                        <small><p>Admin / Admin Panel / Laporan Penjualan</p></small>
                        <hr>
                    </div>
                    <!-- Content Laporan-->
                    <div class="d-flex flex-wrap laporan mt-4 pt-3 gap-3">
                        <div class="card">
                            <div class="d-flex flex-column p-3">
                                <h5>Nama Barang</h5>
                                <small><p>Harga</p></small>
                                <small><p>Nama toko</p></small>
                            </div>
                            <div class="d-flex button-detail">
                                <a class="btn btn-sm ms-auto" href="#">Detail Penjualan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>