<!-- banner -->
<div class="row">
    <div class="col-lg-12">
        <?= $this->session->flashdata('message') ?>
    </div>
</div>

<section id="banner">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="<?= base_url('assets/img/business.png'); ?> ">
            </div>
            <div class="col-md-6 order-md-1">
                <p class="promo-title">Tingkatkan Kopetensi Komputermu !!</p>
                <p class="promo-title-1">Bingung mau ikut palatihan komputer?<br>
                    Pengen lebih kompeten dalam menguasai komputer?<br>
                    Mau ngembangin diri tapi bingung masalah biaya?<br>
                    Ayoo bekali dirimu dengan kemampuan komputer di <br>
                    <span class="promo-title-2">HOPE Computer Training Center</span>
                </p>
                <a type="button" class="btn btn-outline-light font-weight-bold" href="<?= base_url('pendaftaran') ?>">Info
                    Pendaftraan</a>
            </div>
        </div>
    </div>
</section>

<!-- end banner -->
<!-- pembahasan -->

<section id="pembahasan">
    <div class="container text-center">
        <h1 class="title">PEMBAHASAN</h1>
        <div class="row text-center materi-trans">
            <div class="col-md-4 pembahasan">
                <a href="#pembahasan">
                    <img src="<?= base_url('assets/img/business.png'); ?>" class="pembahasan-img">
                    <h4>Mengoprasikan <br> Komputer</h4>
                    <p>Cara mengoprasikan microsoft office</p>
                </a>
            </div>
            <div class="col-md-4 pembahasan">
                <a href="#pembahasan">
                    <img src="<?= base_url('assets/img/business.png'); ?>" class="pembahasan-img">
                    <h4>Pelatihan Kesiapan <br> Kerja</h4>
                    <p>Membentuk pribadi yang siap kerja</p>
                </a>
            </div>
            <div class="col-md-4 pembahasan">
                <a href="#pembahasan">
                    <img src="<?= base_url('assets/img/business.png'); ?>" class="pembahasan-img">
                    <h4>Pelatihan Bahasa <br> koding</h4>
                    <p>Pengenalan Bahasa Pemprograman</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end pembahasan -->
<!-- materi -->

<section id="materi">
    <div class="container text-center">
        <h1 class="title">MATERI</h1>
        <div class="row materi-trans">
            <div class="col-md-4 col-6 materi ">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Materi Mengetik 10 Jari</h4>
                </a>
            </div>
            <div class="col-md-4 col-6 materi">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Mengenal Windows</h4>
                </a>
            </div>
            <div class="col-md-4 col-6 materi">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Mengenal Internet</h4>
                </a>
            </div>
            <div class="col-md-4 col-6 materi">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Microsoft Word</h4>
                </a>
            </div>
            <div class="col-md-4 col-6 materi">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Microsoft Excel</h4>
                </a>
            </div>
            <div class="col-md-4 col-6 materi">
                <a href="#materi">
                    <img src="<?= base_url('assets/img/business.png'); ?>">
                    <h4>Microsoft Power Point</h4>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- end materi -->
<!-- portfolio -->

<section id="portfolio">
    <div class="container text-center portfolio-con">
        <h1 class="title">PORTFOLIO</h1>
        <div class="row portfolio-row">
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/1.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/2.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/3.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/4.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/5.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/6.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/7.jpg'); ?>"></a>
            </div>
            <div class="col-md-3 col-6 portfolio">
                <a href=""><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/portfolio/8.jpg'); ?>"></a>
            </div>
        </div>
    </div>
</section>

<!-- end portfolio -->
<!-- mentor -->

<section id="mentor">
    <div class="container text-center">
        <h1 class="title">PENGAJAR</h1>
        <div class="row text-secondary mentor">
            <div class="col-md-5 offset-1 men-trans">
                <img class="rounded-circle" src="<?= base_url('assets/img/foto.png'); ?>">
                <h5>Eka Irvan Supendi</h5>
                <p>Mahasiswa | Freelance</p>
                <a target="_blank" href="https://www.facebook.com/devan.irvita/"><i class="fab fa-facebook-square"></i></a>
                <a target="_blank" href="https://instagram.com/ekairvans?igshid=aqg75lad7zft"><i class="fab fa-instagram-square"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=628983501906&text=Halo+Mas+Eka"><i class="fab fa-whatsapp-square"></i></a>

            </div>
            <div class="col-md-5 men-trans">
                <img class="rounded-circle" src="<?= base_url('assets/img/foto.png'); ?>">
                <h5>Eka Irvan Supendi</h5>
                <p>Mahasiswa | Freelance</p>
                <a target="_blank" href="https://www.facebook.com/devan.irvita/"><i class="fab fa-facebook-square"></i></a>
                <a target="_blank" href="https://instagram.com/ekairvans?igshid=aqg75lad7zft"><i class="fab fa-instagram-square"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=628983501906&text=Halo+Mas+Eka"><i class="fab fa-whatsapp-square"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- end mentor -->
<!-- Support -->

<section id="support">
    <div class="container text-center">
        <div class="row support">
            <div class="col-md-3 col-support">
                <h2 class="title-sup">Support By :</h2>
            </div>
            <div class="col-md-3 col-support">
                <img src="<?= base_url('assets/img/hope.jpg'); ?>">
            </div>
            <div class="col-md-3 col-support">
                <img src="<?= base_url('assets/img/dewa-web.jpg'); ?>">
            </div>
        </div>
    </div>
</section>

<!-- end support -->
<!-- alumni -->

<section id="alumni">

    <h1 class="title text-center">APA KATA ALUMNI</h1>

    <div id="carouselExampleIndicators" class="carousel slide alumni-slade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row alumni">
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?> " class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row alumni">
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row alumni">
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="d-block w-100" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/foto.png'); ?>" class="card-img-top img-fluid rounded-circle">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fas fa-angle-double-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fas fa-angle-double-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

<!-- end alumni -->