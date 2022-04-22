<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #0b486b;">
                    <h6 class="m-0 font-weight-bold text-white"><?= $title ?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nip</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">User Sejak</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pengajar as $u) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $u['nip'] ?></td>
                                    <td><?= $u['name'] ?></td>
                                    <td><?= $u['no_telp'] ?></td>
                                    <td><?= $u['email'] ?></td>
                                    <td><?= $u['alamat'] ?></td>
                                    <td><?= date('d F Y', $u['date_created']); ?></td>
                                    <?php if ($u['is_active'] == 1) : ?>
                                        <td>Aktif</td>
                                    <?php else : ?>
                                        <td>Tidak Aktif</td>
                                    <?php endif; ?>
                                    <td>
                                        <a class=" badge badge-success" href="<?= base_url('user/getByIdpengajar/'); ?><?= $u['id']; ?>">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="tambahPengajar" tabindex="-1" aria-labelledby="modalTambahPengajar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPengajar">Data pengajar baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="nip" class="form-control" placeholder="NIP" id="nip">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" id="name">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="Email" id="email">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>