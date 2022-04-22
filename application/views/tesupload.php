<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?> ">
    <title>Document</title>
</head>

<body>
    <?= form_open_multipart('tesupload/tesupload'); ?>
    <div class="modal-body">
        <div class="form-group">
            <label for="file">File pdf</label>
            <div class="col-sm">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">Choose file</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>

    <div class="container">

        <?= $this->session->flashdata('message') ?>
        <div class="row mt-3">
            <div class="col-12 col-md-4">
                <div class="card">
                    <?= form_open_multipart('tesupload/upup'); ?>
                    <div class="card-header">
                        <h4 class="card-title">Foto <span class="text-danger">*</span></h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/img/profile/no-foto.png') ?>" alt="Foto Profil" class="d-fluid w-75">
                    </div>
                    <div class="card-footer">
                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="input-foto">Pilih Gambar</label>
                            <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukan Data Diri Anda</h4>
                    </div>

                    <div class="card-body border-top py-0 my-3">
                        <h4 class="text-muted my-3">Lampiran pdf</h4>

                        <div class="col-xs-12 col-sm-6">
                            <label for="ijasah">Ijasah Trakhir <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ijasah" name="ijasah">
                                <label class="custom-file-label" for="file">Pilih file</label>
                                <?= form_error('ijasah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 my-3">
                        <div class="col-xs-12 col-sm-6">
                            <label for="kartu_keluarga">Kartu Keluarga <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="kartu_keluarga" name="kartu_keluarga">
                                <label class="custom-file-label" for="file">Pilih file</label>
                                <?= form_error('kartu_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row w-100">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>