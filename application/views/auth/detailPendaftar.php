<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="row mt-3">
        <?= $this->session->flashdata('message') ?>
        <div class="row w-100">
            <div class="col-sm-6 col-md-2">
                <a type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#terima" href="">Diterima</a>
            </div>
            <div class="col-sm-6 col-md-2">
                <?php $id = $this->uri->segment(3); ?>
                <a type="submit" class="btn btn-danger btn-block" href="<?= base_url('pendaftaran/ditolak/') . $id ?>" onclick="return confirm('Apakah Anda Yakin Tidak Menerima Pendaftar ??')">Tidak Ditrima</a>
            </div>
        </div>
        <div class="col-12 col-md-4 py-0 my-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Foto </h4>
                </div>
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/img/profile/')  . $pendaftar['image']; ?>" alt="Foto Profil" class="d-fluid w-75">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 py-0 my-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Diri Pendaftar</h4>
                </div>
                <div class="card-body py-0 my-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap : </label> <br>
                                <h4 class="card-title"><?= $pendaftar['name'] ?></h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <h4 class="card-title"><?= $pendaftar['email'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="no_telp">Nomor Telephon : </label>
                                <h4 class="card-title"><?= $pendaftar['email'] ?></h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir : </label>
                                <h4 class="card-title"><?= $pendaftar['tgl_lahir'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <h4 class="card-title"><?= $pendaftar['alamat'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">

            <div class="card-body border-top py-0 my-3">
                <h4 class="text-muted my-3">Lampiran pdf</h4>
                <div class="col-xs-12 col-sm-6">

                    <label for="ijasah">Ijasah Trakhir </label>
                    <embed type="application/pdf" src="<?= base_url('assets/doc/') . $pendaftar['ijasah'] ?>" width="600" height="400"></embed>
                </div>
            </div>
            <div class="card-body py-0 my-3">
                <div class="col-xs-12 col-sm-6">
                    <label for="kartu_keluarga">Kartu Keluarga </label>
                    <embed type="application/pdf" src="<?= base_url('assets/doc/') . $pendaftar['krt_keluarga'] ?>" width="600" height="400"></embed>
                </div>
            </div>



        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="terima" tabindex="-1" aria-labelledby="terimaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terima Peserta Didik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $id = $this->uri->segment(3); ?>
            <form action="<?= base_url('pendaftaran/diterima/') . $id ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="name" value="<?= $pendaftar['name'] ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Nip Peserta">
                    </div>
                    <input type="hidden" name="alamat" value="<?= $pendaftar['alamat'] ?>">
                    <input type="hidden" name="email" value="<?= $pendaftar['email'] ?>">
                    <input type="hidden" name="no_telp" value="<?= $pendaftar['no_telp'] ?>">
                    <input type="hidden" name="tgl_lahir" value="<?= $pendaftar['tgl_lahir'] ?>">
                    <input type="hidden" name="image" value="<?= $pendaftar['image'] ?>">
                    <input type="hidden" name="ijasah" value="<?= $pendaftar['ijasah'] ?>">
                    <input type="hidden" name="krt_keluarga" value="<?= $pendaftar['krt_keluarga'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>