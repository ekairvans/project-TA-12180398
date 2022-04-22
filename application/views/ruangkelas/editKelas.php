<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('pengajar/editKelas'); ?>" method="post">
                <input type="hidden" value="<?= $kelas['id_kelas']; ?>" name="id_kelas">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pengajar">Instruktur</label>
                        <input type="text" class="form-control" id="pengajar" name="pengajar" placeholder="<?= $kelas['name']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="id_materi">Materi</label>
                        <select name="id_materi" id="id_materi" class="form-control">
                            <?php foreach ($materi as $m) : ?>
                                <?php if ($m['id_materi'] == $kelas['id_materi']) : ?>
                                    <option value="<?= $m['id_materi']; ?>" selected><?= $m['judul_materi']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $m['id_materi']; ?>"><?= $m['judul_materi']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_kelas">Judul Kelas</label>
                        <input type="text" class="form-control" id="judul_kelas" name="judul_kelas" value="<?= $kelas['judul_kelas']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pertemuan">Pertemuan ke</label>
                        <input type="text" class="form-control" id="pertemuan" name="pertemuan" value="<?= $kelas['pertemuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jam_mulai">Mulai Kelas</label>
                        <input type="datetime" name="jam_mulai" id="jam_mulai" class="form-control" value="<?= $kelas['jam_mulai']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jam_selesei">Kelas Selesai</label>
                        <input type="datetime" name="jam_selesei" id="jam_selesei" class="form-control" value="<?= $kelas['jam_selesei']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->