<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- login -->
    <div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
        <div class="container form-login">
            <h4 class="text-center">MASUK</h4>
            <hr>
            <p class="text-center text-secondary">Masukan NIP & Password anda</p>
            <form action="<?= base_url('login'); ?>" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan NIP Anda" id="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" id="password">
                    </div>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <br>
                <a class="lupa-pass" href="">lupa password ?</a>
                <div class="bawah">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <p class="kembali">tidak punya akun ? <a href="<?= base_url('auth'); ?>">Kembali</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- end login -->

    <!-- menambhakan data member -->

    <div class="modal fade" tabindex="-1" id="daftarModal" role="dialog">
        <div class="container form-login">

            <p class="text-center text-secondary">Menambahkan data member</p>
            <form action="<?= base_url('auth/createDataMember'); ?>" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="nip" class="form-control" placeholder="NIP" id="nip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="Email" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                            </div>
                            <input type="password" name="password1" class="form-control" placeholder="Password" id="password1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                            </div>
                            <input type="password" name="password2" class="form-control" placeholder="Password" id="password2">
                        </div>
                    </div>
                </div>


                <br>

                <div class="bawah">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <p class="kembali"><a href="<?= base_url('auth'); ?>">Kembali</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- end nambah data -->



</body>

</html>