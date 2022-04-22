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
                    <div class="row">
                        <div class="col-md">
                            <h6 class="m-0 font-weight-bold text-white"><?= $title ?></h6>
                        </div>
                        <div class="col-md">
                            <?php if ($user['role_id'] == 3) : ?>
                            <?php else : ?>
                                <a class="btn btn-success float-right mr-2" data-toggle="modal" data-target="#newKelas" href="">Kelas Baru</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">No</th>
                                <th scope="col">Judul Kelas</th>
                                <th scope="col">Materi</th>
                                <th scope="col">Pertemuan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam Mulai</th>
                                <th scope="col">Jam Selesei</th>
                                <th scope="col">Instruktur</th>
                                <th scope="col">Ruang Kelas</th>
                                <?php if ($user['role_id'] == 3) : ?>
                                <?php else : ?>
                                    <th scope="col">Action</th>
                                <?php endif; ?>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kelas as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $sm['judul_kelas'] ?></td>
                                    <td><?= $sm['judul_materi'] ?></td>
                                    <td style="text-align: center;"><a class="btn btn-primary" href=""><?= $sm['pertemuan'] ?></a></td>
                                    <td><?= date('d F Y', strtotime($sm['jam_mulai'])); ?>
                                    </td>
                                    <td><?= date('H:i', strtotime($sm['jam_mulai'])); ?></td>
                                    <td><?= date('H:i', strtotime($sm['jam_selesei'])); ?></td>
                                    <td><?= $sm['name'] ?></td>
                                    <td>

                                        <?php if ($user['role_id'] == 3) : ?>
                                            <?php if (strtotime($sm['jam_mulai']) > strtotime("now")) : ?>
                                                <a class="btn btn-primary" href="">Kelas Belom Dimulai</a>
                                            <?php else : ?>
                                                <?php if (strtotime($sm['jam_selesei']) >= strtotime("now")) : ?>
                                                    <a class="btn btn-success" href="<?= base_url('siswa/getByIdkelas/'); ?><?= $sm['id_kelas']; ?>">Masuk Kelas</a>
                                                <?php else : ?>
                                                    <a class="btn btn-danger" href="<?= base_url('siswa/getByIdkelas/'); ?><?= $sm['id_kelas']; ?>">Kelas Selesai</a>
                                                    <?php
                                                    if ($this->ModelKelas->getUploadTugas($sm['id_kelas'], $this->session->userdata('nip'))) {
                                                    } else {
                                                        $data = [
                                                            'status' => 0,
                                                            'id_kelas' => $sm['id_kelas'],
                                                            'nip_user' => $this->session->userdata('nip'),
                                                            'pengajar' => $sm['name'],
                                                            'tanggal' => strtotime($sm['jam_selesei']),
                                                            'materi' => $sm['judul_materi'],
                                                            'judul_kelas' => $sm['judul_kelas'],
                                                            'pertemuan' => $sm['pertemuan']

                                                        ];

                                                        $this->db->insert('absensi', $data);
                                                    }
                                                    ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                    </td>




                                <?php else : ?>
                                    <?php if (strtotime($sm['jam_mulai']) > strtotime("now")) : ?>
                                        <a class="btn btn-primary" href="">Kelas Belom Dimulai</a>
                                    <?php else : ?>
                                        <?php if (strtotime($sm['jam_selesei']) >= strtotime("now")) : ?>
                                            <a class="btn btn-success" href="<?= base_url('pengajar/getByIdkelas/'); ?><?= $sm['id_kelas']; ?>">Masuk Kelas</a>
                                        <?php else : ?>
                                            <a class="btn btn-danger" href="<?= base_url('pengajar/getByIdkelas/'); ?><?= $sm['id_kelas']; ?>">Kelas Selesai</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    </td>
                                    <?php if ($user['role_id'] == 3) : ?>
                                    <?php else : ?>
                                        <td><a class="badge badge-warning" href="<?= base_url('pengajar/getByIdEdit/'); ?><?= $sm['id_kelas'] ?>">Edit</a>
                                            <a class="badge badge-danger" href="<?= base_url('pengajar/deleteKelas/'); ?><?= $sm['id_kelas'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Kelas ??')">Delete</a>
                                        </td>
                                    <?php endif; ?>

                                <?php endif; ?>


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
<div class="modal fade" id="newKelas" tabindex="-1" aria-labelledby="newKelaslabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0b486b;">
                <h5 class="modal-title text-white" id="newKelaslabel">Kelas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengajar'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pengajar">Instruktur</label>
                        <input type="text" class="form-control" id="pengajar" name="pengajar" placeholder="<?= $user['name']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="id_materi">Materi</label>
                        <select name="id_materi" id="id_materi" class="form-control">
                            <option value="">Pilih Materi</option>
                            <?php foreach ($materi as $m) : ?>
                                <option value="<?= $m['id_materi']; ?>"><?= $m['judul_materi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_kelas">Judul Kelas</label>
                        <input type="text" class="form-control" id="judul_kelas" name="judul_kelas">
                    </div>
                    <div class="form-group">
                        <label for="pertemuan">Pertemuan ke</label>
                        <input type="text" class="form-control" id="pertemuan" name="pertemuan">
                    </div>
                    <div class="form-group">
                        <label for="jam_mulai">Mulai Kelas</label>
                        <input type="datetime-local" name="jam_mulai" id="jam_mulai" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jam_selesei">Kelas Selesai</label>
                        <input type="datetime-local" name="jam_selesei" id="jam_selesei" class="form-control">
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #0b486b;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>