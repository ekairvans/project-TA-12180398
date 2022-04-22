<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body id="top-bar">
    <!-- navbar -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand navbar-index" href="#top-bar"><img src="<?= base_url('assets/img/logo-hope-2.png'); ?> "></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#top-bar">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('pendaftaran') ?>">Pendaftaran</a>
                        </li>
                        <li>
                            <a class="btn btn-outline-light font-weight-bold" href="<?= base_url('auth/login'); ?>">Masuk</a>
                        </li>
                        <!-- <li>
                            <button type="button" class="btn btn-outline-light font-weight-bold" data-toggle="modal" data-target="#daftarModal">Masuk</button>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- end navbar -->