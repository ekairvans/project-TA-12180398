<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message') ?>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Instruktur</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas['name']; ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Judul Kelas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas['judul_kelas']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jam Mulai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= date('H:i', strtotime($kelas['jam_mulai'])); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tanggal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= date('d F Y', strtotime($kelas['jam_mulai'])); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Pertemuan ke</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas['pertemuan']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Materi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas['judul_materi']; ?></div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Jam Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= date('H:i', strtotime($kelas['jam_selesei'])); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-end fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Absen</div>

                            <?php $id = $this->uri->segment(3); ?>
                            <?php if ($user['role_id'] == 3) : ?>
                                <?php $id = $this->uri->segment(3); ?>
                                <?php if ($absensi) : ?>
                                    <a href="<?php echo base_url('siswa/forumDiskusi/' . $kelas['id_kelas'] . '/'); ?>" class="btn btn-success"><i class="fa  fa-comments"></i> Forum Diskusi (<?= count($chat); ?>)</a><br><br>
                                    <!-- <a href="<?= base_url('siswa/rekapAbsen') ?>" class="btn btn-primary">Anda Sudah Absen</a> -->
                                <?php else : ?>
                                    <?php if (strtotime($kelas['jam_mulai']) > strtotime("now")) : ?>
                                        <a class="btn btn-primary" href="">Kelas Belom Dimulai</a>
                                    <?php else : ?>
                                        <?php if (strtotime($kelas['jam_selesei']) >= strtotime("now")) : ?>
                                            <form action="<?= base_url('siswa/absensi/') . $id; ?>" method="post">
                                                <input type="hidden" name="id_kelas" value="<?= $id ?>">
                                                <input type="hidden" name="nip_user" value="<?= $user['nip']; ?>">
                                                <input type="hidden" name="pengajar" value="<?= $kelas['name']; ?>">
                                                <input type="hidden" name="materi" value="<?= $kelas['judul_materi']; ?>">
                                                <input type="hidden" name="judul_kelas" value="<?= $kelas['judul_kelas']; ?>">
                                                <input type="hidden" name="pertemuan" value="<?= $kelas['pertemuan']; ?>">
                                                <button type="submit" class="btn btn-success" name="absen">Absen</button>
                                            </form>
                                        <?php else : ?>
                                            <a class="btn btn-danger" href="">Kelas Selesai</a>
                                            <?php
                                            // $data = [
                                            //     'status' => 0,
                                            //     'id_kelas' => $id,
                                            //     'nip_user' => $user['nip'],
                                            //     'pengajar' => $kelas['name'],
                                            //     'tanggal' => strtotime($kelas['jam_selesei']),
                                            //     'materi' => $kelas['judul_materi'],
                                            //     'judul_kelas' => $kelas['judul_kelas'],
                                            //     'pertemuan' => $kelas['pertemuan']

                                            // ];

                                            // $this->db->insert('absensi', $data);
                                            ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else : ?>
                                <a class="btn btn-primary" href="">Sudah Absen <br> (<?= $this->ModelKelas->getsudahabsen($id)->num_rows(); ?> / 10)</a>
                            <?php endif; ?>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#materi" data-toggle="tab">
                                        <i class="fas fa-fw  fa-book"></i> Materi Pembelajaran
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#video" data-toggle="tab">
                                        <i class="fab fa-youtube"></i> Video Pembelajaran
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tugas" data-toggle="tab">
                                        <i class="fas fa-book-medical"></i> Tugas
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <?php if ($user['role_id'] == 3) : ?>
                                <?php else : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tugasTerkumpul" data-toggle="tab">
                                            <i class="fas fa-book-medical"></i> Tugas Terkumpul (<?= $this->ModelKelas->gettgsterkumpul($id)->num_rows(); ?>)
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="materi">

                            <?php if ($user['role_id'] == 3) : ?>
                            <?php else : ?>

                                <a class="btn btn-primary" data-toggle="modal" data-target="#newBelajar" href="">Materi Belajar Baru</a>
                                <a href="<?= base_url('pengajar/forumDiskusi/' . $kelas['id_kelas'] . '/'); ?>" class="btn btn-success"><i class="fa  fa-comments"></i> Forum Diskusi (<?= count($chat); ?>)</a><br><br>
                            <?php endif; ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Kelas</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">File Materi</th>
                                        <th scope="col">Tanggal</th>
                                        <?php if ($user['role_id'] == 3) : ?>
                                        <?php else : ?>
                                            <th scope="col">Action</th>
                                        <?php endif; ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_GET['filename'])) {
                                        $filename    = $_GET['filename'];

                                        $back_dir    = "assets/doc/";
                                        $file = $back_dir . $_GET['filename'];

                                        if (file_exists($file)) {
                                            header('Content-Description: File Transfer');
                                            header('Content-Type: application/octet-stream');
                                            header('Content-Disposition: attachment; filename=' . basename($file));
                                            header('Content-Transfer-Encoding: binary');
                                            header('Expires: 0');
                                            header('Cache-Control: private');
                                            header('Pragma: private');
                                            header('Content-Length: ' . filesize($file));
                                            ob_clean();
                                            flush();
                                            readfile($file);

                                            exit;
                                        } else {
                                            $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
                                            header("location:index.php");
                                        }
                                    }
                                    ?>

                                    <?php $i = 1; ?>
                                    <?php foreach ($pembelajaran as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $kelas['judul_kelas'] ?></td>
                                            <td><?= $sm['description'] ?></td>
                                            <td><a class="btn btn-primary" href="download.php?filename=<?= $sm['file'] ?>"><i class="fas fa-download"></i></a></td>
                                            <td><?= date('d F Y', $sm['date_create']); ?></td>
                                            <?php if ($user['role_id'] == 3) : ?>
                                            <?php else : ?>
                                                <td><a class="btn btn-primary mb-3" href="<?= base_url('pengajar/tugasBaru/' . $id . '/' . $sm['id_pem']) . '/' . $kelas['pertemuan'] ?>">Tambah Tugas</a></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="video">
                            <div class="row">
                                <?php foreach ($pembelajaran as $sm) : ?>
                                    <div class="col-md-4 mb-4 ml-2">

                                        <div class="card" style="width: 25rem;">
                                            <div class="embed-responsive embed-responsive-16by9">

                                                <embed src="<?= $sm['video']; ?>" style="width: 400px;">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $kelas['judul_kelas']; ?></h5>
                                                <p class="card-text"><?= date('d F Y', $sm['date_create']); ?></p>
                                                <a href="#" class="btn btn-success">Lihat Deskripsi</a>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>

                        <div class="tab-pane" id="tugas">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Tugas</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">File Tugas</th>
                                        <th scope="col">Batas Waktu</th>
                                        <?php if ($user['role_id'] == 3) : ?>
                                            <th scope="col">Action</th>
                                        <?php endif; ?>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_GET['filename'])) {
                                        $filename    = $_GET['filename'];

                                        $back_dir    = "assets/doc/";
                                        $file = $back_dir . $_GET['filename'];

                                        if (file_exists($file)) {
                                            header('Content-Description: File Transfer');
                                            header('Content-Type: application/octet-stream');
                                            header('Content-Disposition: attachment; filename=' . basename($file));
                                            header('Content-Transfer-Encoding: binary');
                                            header('Expires: 0');
                                            header('Cache-Control: private');
                                            header('Pragma: private');
                                            header('Content-Length: ' . filesize($file));
                                            ob_clean();
                                            flush();
                                            readfile($file);

                                            exit;
                                        } else {
                                            $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
                                            header("location:index.php");
                                        }
                                    }
                                    ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tugas as $ts) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $ts['judul_tugas'] ?></td>
                                            <td><?= $ts['desc_tugas'] ?></td>
                                            <td><a class="btn btn-primary" href="download.php?filename=<?= $ts['file'] ?>"><i class="fas fa-download"></i></a></td>
                                            <td><?= $ts['date_exp']; ?></td>
                                            <?php if ($user['role_id'] == 3) : ?>
                                                <td><a class="btn btn-primary mb-3" href="<?= base_url('siswa/kirimTugas/' . $id . '/' . $ts['id_tugas']) ?>">Kirim Tugas</a></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="tugasTerkumpul">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nip</th>
                                        <th scope="col">File Tugas</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Dikirim</th>
                                        <th scope="col">Diubah</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tugasterkumpul as $tt) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $tt['name'] ?></td>
                                            <td><?= $tt['nip'] ?></td>
                                            <td><a class="btn btn-primary mb-3" href="<?= base_url('pengajar/lihatTugas/' . $id . '/' . $tt['id_relasi']) ?>">Lihat File</a></td>
                                            <td><?= $tt['nilai'] ?></td>
                                            <td><?= $tt['relasi_create'] ?></td>
                                            <td><?= $tt['relasi_update'] ?></td>
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
    </div>
</div>


<!-- /.container-fluid -->


<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="tugasBaru" tabindex="-1" aria-labelledby="tugasBarulabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0b486b;">
                <h5 class="modal-title text-white" id="tugasBarulabel">Tugas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <?php
            $id_kelas = $this->uri->segment(3);
            $id_pem = $this->db->get('pembelajaran')->result_array();
            ?>
            <?= form_open_multipart('dashboard/tugasBaru/' . $id_kelas); ?>
            <input type="hidden" id="id_pem" name="id_pem" value="<?= $id_pem['id_pem'] ?>">
            <input type="hidden" id="id_kelas" name="id_kelas" value="<?= $id_kelas; ?>">

            <div class="modal-body">
                <div class="form-group">
                    <label for="judul_tugas">Judul Tugas</label>
                    <input type="text" class="form-control" id="judul_tugas" name="judul_tugas">
                </div>
                <div class="form-group">
                    <label for="description1">Description</label>
                    <input type="text" class="form-control" id="description1" name="description1">
                </div>
                <div class="form-group">
                    <label for="file1">File Tugas</label>
                    <div class="col-sm">
                        <input type="file" class="custom-file-input" id="file1" name="file1">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="batas_waktu">Batas Waktu</label>
                    <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control">
                </div>
            </div>
            <div class="modal-footer" style="background-color: #0b486b;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newBelajar" tabindex="-1" aria-labelledby="newBelajarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0b486b;">
                <h5 class="modal-title text-white" id="newBelajarlabel">Materi Belajar Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <?php $id_kelas = $this->uri->segment(3); ?>
            <?= form_open_multipart('pengajar/materiBelajarBaru/' . $id_kelas); ?>
            <input type="hidden" id="id_kelas" name="id_kelas" value="<?= $id_kelas; ?>">

            <div class="modal-body">
                <div class="form-group">
                    <label for="judul_kelas">Judul kelas</label>
                    <input type="text" class="form-control" id="judul_kelas1" name="judul_kelas1" placeholder="<?= $kelas['judul_kelas']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required oninvalid="this.setCustomValidity('Description harus diisi ..')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="video">Link Video</label>
                    <input type="text" class="form-control" id="video" name="video">
                </div>
                <div class="form-group">
                    <label for="file">File pdf</label>
                    <div class="col-sm">
                        <input type="file" class="custom-file-input" id="file" name="file" required oninvalid="this.setCustomValidity('File harus diisi ..')" oninput="setCustomValidity('')">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #0b486b;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>