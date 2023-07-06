<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="<?= base_url('asset/css/style.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('asset/img-asset/NavbarImg.png');?>" alt="Logo" width="170">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mt-2 gap-4">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('beranda');?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('Produk');?>">Produk</a>
                        </li>
                        <div class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('TentangKami');?>">Tentang Kami</a>
                        </div>
                    </ul>
                    <ul class="navbar-nav ms-auto mt-4">
                        <li class="nav-item mt-1">
                            <input type="text" name="" id="" placeholder="Cari Barang">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Keranjang');?>"><i class="fa-solid fa-cart-shopping text-light"></i></a>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link text-light">|</p>
                        </li>
                        <li class="nav-item">
                            <?php if ($this->session->userdata('email')) { ?>
                                <a class="nav-link text-light btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $user['username']?></a>
                                <div class="d-flex">
                                    <ul class="dropdown-menu" style="margin-left: 66em;">
                                        <?if ($show['role_id'] == 2) {?>
                                            <form action="Pembeli" method="post"> 
                                                <input type="hidden" name="id_user" value="<?= $show['id_user']?>">
                                                <li><button type="submit" class="dropdown-item" name="role_id">Beralih ke Pembeli</button></li>
                                            </form>
                                            <li><a class="dropdown-item" href="<?= base_url('Toko/Dashboard');?>">Kelola Toko</a></li>
                                        <? } else { ?>
                                            <form action="Penjual" method="post"> 
                                                <input type="hidden" name="id_user" value="<?= $show['id_user']?>">
                                                <li><button type="submit" class="dropdown-item" name="role_id">Beralih ke Penjual</button></li>
                                            </form>
                                        <?}?>
                                        <li><a class="dropdown-item" href="#">Akun</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('Logout');?>">Logout</a></li>
                                    </ul>
                                </div>
                            <?php } else { ?>
                                <a class="nav-link text-light" href="Login">Masuk</a> 
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Section Content Start -->
            <section class="detail-produk">
                <div class="container mt-5">
                    <div class="text-head">
                        <h5 class="fw-bold">Produk</h5>
                        <div class="line" style="background:brown;width:5em;heigth:20px;"></div>
                    </div>
                    <div class="d-flex flex-row text-body">
                        <div class="card" style="width: 75em;">
                            <div class="d-flex p-4">
                                <div class="img-section">
                                    <div class="img-active"></div>
                                    <div class="d-flex flex-row gap-4 small-img mt-3">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                        <div class="img-4"></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column description-section ms-auto">
                                    <p class="deksripsi"><?= $produk['deskripsi']?></p>
                                    <section class="information">
                                        <p class="harga fw-bold">Harga</p>
                                        <p><?= $produk['harga_barang']?></p>
                                    </section>
                                    <section class="button">
                                        <div class="d-flex flex-column">
                                            <a href="#">Masukkan Keranjang</a>
                                            <a href="#">Beli Sekarang</a>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Section Content End -->
        <!-- Section Komentar Start -->
            <section class="komentar mt-5 pt-2">
                <div class="container">
                    <div class="header-komenta mb-5">
                        <h5 class="fw-bold">Komentar</h5>
                    </div>
                        <div class="body-komentar mt-3">
                            <?php foreach ($komentar as $k) : ?>
                                <h6 class="fw-bold">
                                    <?php if ($user['nama'] == null) : ?>
                                        <?= $user['username'] ?>
                                    <?php else : ?>
                                        <?= $user['nama'] ?>
                                    <?php endif; ?>
                                </h6>
                                <p><?= $k['isi_komentar'] ?></p>
                                <hr class="mt-3 mb-3">
                            <?php endforeach; ?>
                        </div>
                    <div class="footer-komentar">
                        <form action="<?= base_url('Detail/Komentar/'.$produk['id_barang']);?>" method="post">
                            <input type="hidden" name="user_id" id="user_id" value="<?=$user['id_user']?>">
                            <input type="hidden" name="barang_id" id="barang_id" value="<?=$produk['id_barang']?>">
                            <div class="komentar">
                                <textarea name="isi_komentar" id="isi_komentar" cols="122" style="resize:none;"></textarea>
                            </div>
                            <button type="submit">Kirim Komentar</button>
                        </form>
                    </div>
                </div>
            </section>
        <!-- Section Komentar End -->
        <!-- Section Footer Start -->
        <section class="footer mt-5">
            <footer>
                <div class="container">
                    <div class="row pt-4">
                        <div class="col">
                            <h5 class="fw-bold">Lokasi</h5>
                            <p>PH7V+58P, Jl. Adhyaksa, Sungai Miai, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Hubungi Kami</h5>
                            <p>Ms.Fulana +62 824 8454 2484</p>
                            <a href="mailto:goedangantique@gmail.com">goedangantique@gmail.com</a>
                        </div>
                        <div class="col">
                            <h5 class="fw-bold">Ikuti Kami</h5>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <!-- Section Footer End -->
    </body>
</html>

<style>
    .nav-item ul
    {
        margin-right: 50em;
    }
</style>