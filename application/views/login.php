<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">


    <title>Login</title>
</head>

<body id="form-login">
    <div class="container form-login">
        <h4 class="text-center">MASUK</h4>
        <hr>
        <p class="text-center text-secondary">Masukan NIP & Password anda</p>
        <?= $this->session->flashdata('message') ?>
        <form action="<?= base_url('login'); ?>" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP Anda" id="nip" value="<?= set_value('nip'); ?>">
                </div>
                <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class=" form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" id="password">
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            </div>
            <br>
            <a class="lupa-pass" href="">lupa password ?</a> -->
            <div class="bawah">
                <button type="submit" class="btn btn-primary">Masuk</button>
                <p class="kembali">tidak punya akun ? <a href="<?= base_url('auth'); ?>">Kembali</a></p>
            </div>
        </form>
    </div>
</body>

</html>