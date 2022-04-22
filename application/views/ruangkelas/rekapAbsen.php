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
                                <th scope="col">Status</th>
                                <th scope="col">Pertemuan</th>
                                <th scope="col">Instruktur</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Materi</th>
                                <th scope="col">Judul Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($absensi as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td>
                                        <?php if ($sm['status'] == 1) : ?>
                                            <a class="btn btn-success" href="">Hadir</a>
                                        <?php else : ?>
                                            <a class="btn btn-danger" href="">Tidak Hadir</a>
                                        <?php endif; ?>
                                    </td>
                                    <td style="text-align: center;"><a class="btn btn-primary" href=""><?= $sm['pertemuan'] ?></td>
                                    <td><?= $sm['pengajar'] ?></td>
                                    <td><?= date('d F Y H:i', $sm['tanggal']); ?></td>
                                    <td><?= $sm['materi'] ?></td>
                                    <td><?= $sm['judul_kelas'] ?></td>

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