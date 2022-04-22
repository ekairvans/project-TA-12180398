<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-4">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-md-4 py-0 my-3">
            <div class="card">
                <div class="card-header" style="background-color: #0b486b;">
                    <h4 class="card-title text-white">Foto </h4>
                </div>
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/img/profile/')  . $user['image']; ?>" alt="Foto Profil" class="d-fluid w-75">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 py-0 my-3">
            <div class="card">
                <div class="card-header" style="background-color: #0b486b;">
                    <h4 class="card-title text-white">Data Diri user</h4>
                </div>
                <div class="card-body py-0 my-3">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap : </label> <br>
                                <h4 class="card-title"><?= $user['name'] ?></h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <h4 class="card-title"><?= $user['email'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="no_telp">Nomor Telephon : </label>
                                <h4 class="card-title"><?= $user['no_telp'] ?></h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir : </label>
                                <h4 class="card-title"><?= $user['tgl_lahir'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <h4 class="card-title"><?= $user['alamat'] ?></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

</div>
<!-- End of Main Content -->