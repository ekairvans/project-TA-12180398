<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-5">
        <div class="col-lg-6">
            <?php $id_kelas = $this->uri->segment(3);
            $id = $this->uri->segment(4); ?>
            <?php if ($relasi_tugas) : ?>

                <div class="col-12">

                    <div class="card-body border-top py-0 my-3">
                        <div class="col-xs-12 col-sm-6">
                            <label for="ijasah">Nama : <?= $relasi_tugas['name'] ?> <br> Nip : <?= $relasi_tugas['nip'] ?></label>
                            <embed type="application/pdf" src="<?= base_url('assets/doc/') . $relasi_tugas['file_tugas'] ?>" width="600" height="400"></embed>
                        </div>
                    </div>
                </div>
                <?= form_open_multipart('siswa/editUploadTugas/' . $id_kelas . '/' . $id); ?>
                <input type="hidden" value="<?= $relasi_tugas['id_relasi']; ?>" name="id_relasi">
                <input type="hidden" value="<?= date('d-m-Y H:i', time()) ?>" name="dateupdate">
                <div class="form-group">
                    <label for="file1">File Tugas Dalam Bentuk pdf</label>
                    <div class="col-sm">
                        <input type="file" class="custom-file-input" id="file1" name="file1">
                        <label class="custom-file-label" for="file"><?= $relasi_tugas['file_tugas'] ?></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            <?php else : ?>
                <?= form_open_multipart('siswa/uploadTugas/' . $id_kelas . '/' . $id); ?>
                <input type="hidden" value="<?= date('d-m-Y H:i', time()) ?>" name="date">
                <div class="form-group">
                    <label for="file">File Tugas Dalam Bentuk pdf</label>
                    <div class="col-sm">
                        <input type="file" class="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" for="file">Pilih file</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            <?php endif; ?>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->