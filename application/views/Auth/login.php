<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- Script CSS -->
        <link rel="stylesheet" href="asset/css/auth.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header-teks">
            <div class="container">
                <div class="logo text-center">
                    <a href="">
                        <img src="asset/img-asset/NavbarImg.png" alt="Logo" width="275">
                    </a>
                </div>
                <div class="position-fixed">
                    <?= $this->session->flashdata('message');?>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card mt-5">
                        <div class="container">
                            <div class="card-header">
                                <h4 class="fw-bold">Login</h4>
                            </div>
                            <div class="card-body">
                                <form action="Login" method="post">
                                    <div class="d-flex flex-column email mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="d-flex flex-column password mt-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password">
                                    </div>
                                    <div class="d-flex flex-column button-auth mt-5">
                                        <button class="btn">Masuk</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer mt-4">
                                <div class="d-flex justify-content-center">
                                    <p>Belum punya akun ?</p>
                                    <a class="ms-3" href="Register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>