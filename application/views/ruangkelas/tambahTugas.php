<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
            <?php $id_kelas = $this->uri->segment(3);
            $id_pem = $this->uri->segment(4);
            $pertemuan = $this->uri->segment(5); ?>
            <?= form_open_multipart('pengajar/tugasBaru/' . $id_kelas . '/' . $id_pem); ?>
            <input type="hidden" value="<?= $pertemuan ?>" name="pertemuan">
            <div class="modal-body">
                <div class="form-group">
                    <label for="judul_tugas">Judul Tugas</label>
                    <input type="text" class="form-control" id="judul_tugas" name="judul_tugas">
                    <?= form_error('judul_tugas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description1">Description</label>
                    <input type="text" class="form-control" id="description1" name="description1">
                    <?= form_error('description1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="file1">File Tugas</label>
                    <div class="col-sm">
                        <input type="file" class="custom-file-input" id="file1" name="file1" required oninvalid="this.setCustomValidity('File harus diisi ..')" oninput="setCustomValidity('')">
                        <label class="custom-file-label" for="file">Choose file</label>

                    </div>
                </div>
                <div class="form-group">
                    <label for="batas_waktu">Batas Waktu</label>
                    <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control">
                    <?= form_error('batas_waktu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->