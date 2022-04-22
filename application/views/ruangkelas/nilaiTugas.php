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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nip</th>
                        <th scope="col">Judul Tugas</th>
                        <th scope="col">Pertemuan</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Dikirim</th>
                        <th scope="col">Diubah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nilaiTugas as $tt) : ?>
                        <tr>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tt['name'] ?></td>
                            <td><?= $tt['nip'] ?></td>
                            <td><?= $tt['judul_tugas'] ?></td>
                            <td><a class="btn btn-primary" href=""><?= $tt['pertemuan'] ?></a></td>
                            <td><?= $tt['nilai'] ?></td>
                            <td><?= $tt['relasi_create'] ?></td>
                            <td><?= $tt['relasi_update'] ?></td>
                        </tr>

                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->