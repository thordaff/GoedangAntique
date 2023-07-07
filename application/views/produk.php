<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="asset/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="asset/img-asset/NavbarImg.png" alt="Logo" width="170">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mt-2 gap-4">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('Beranda');?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('Produk');?>">Produk</a>
                        </li>
                        <div class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('Tentang');?>">Tentang Kami</a>
                        </div>
                    </ul>
                    <ul class="navbar-nav ms-auto mt-4">
                        <li class="nav-item mt-1">
                            <input type="text" name="" id="" placeholder="Cari Barang">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping text-light"></i></a>
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
                                            <li><a class="dropdown-item" href="Toko/Dashboard">Kelola Toko</a></li>
                                        <? } else { ?>
                                            <form action="Penjual" method="post"> 
                                                <input type="hidden" name="id_user" value="<?= $show['id_user']?>">
                                                <li><button type="submit" class="dropdown-item" name="role_id">Beralih ke Penjual</button></li>
                                            </form>
                                        <?}?>
                                        <li><a class="dropdown-item" href="#">Akun</a></li>
                                        <li><a class="dropdown-item" href="Logout">Logout</a></li>
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
        <section class="content-2 mt-5 mb-5">
            <div class="container">
                <div class="d-flex">
                    <div class="d-flex flex-row gap-3">
                        <?php foreach($produk as $p) :?>
                            <a href="Detail/<?= $p['id_barang'];?>">
                                <div class="card" style="width: 15rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold"><?= $p['nama_barang']?></h5>
                                        <div class="row mt-1 mb-5" style="">
                                            <div class="col-2">
                                            <img src="<?= base_url().'/Image/Barang/'.$p['nama_barang'].'/'.$p['foto1'] ?>" alt="" width="25">
                                            </div>
                                            <div class="col-10">
                                                <p class="card-text"><?=$p ['nama_toko']?></p>
                                            </div>
                                        </div>
                                        <p class="text-disabled">Harga</p>
                                        <p>Rp. <?=$p['harga_barang']?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ;?>
                    </div>
                </div>
            </section>
        <!-- Section Content End -->
        <!-- Section Footer Start -->
        <section class="footer mt-5" style="position:relative;top:100px!important;">
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