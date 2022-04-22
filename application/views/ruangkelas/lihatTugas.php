<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-5">

        <?php $id_kelas = $this->uri->segment(3);
        $id = $this->uri->segment(4); ?>


        <div class="col-8">

            <div class="card-body py-0 my-3">
                <div class="col-xs-12 col-sm-6">
                    <label for="ijasah">Nama : <?= $id_tugas['name'] ?><br> Nip : <?= $id_tugas['nip'] ?></label>
                    <embed type="application/pdf" src="<?= base_url('assets/doc/') . $id_tugas['file_tugas'] ?>" width="650" height="400"></embed>
                </div>
            </div>
        </div>
        <div class="col-4 mt-5">
            <?= form_open_multipart('pengajar/updateNilai/' . $id_kelas . '/' . $id); ?>
            <input type="hidden" value="<?= $id ?>" name="id_relasi">
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">Nilai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $id_tugas['nilai'] ?>">
                    <?= form_error('nilai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-grup row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
            </form>
        </div>



    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->