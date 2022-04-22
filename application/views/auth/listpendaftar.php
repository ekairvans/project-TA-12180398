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
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pendaftar as $u) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $u['name'] ?></td>
                                    <td><?= $u['email'] ?></td>
                                    <td><?= $u['no_telp'] ?></td>
                                    <td><?= $u['alamat'] ?></td>
                                    <td><?= date('d F Y', $u['date_created']); ?></td>
                                    <td>
                                        <a class=" badge badge-success" href="<?= base_url('pendaftaran/getById/'); ?><?= $u['id_pendaftar']; ?>">Detail</a>
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