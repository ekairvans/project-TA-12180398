<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.css') ?> ">


    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <?= $this->session->flashdata('message') ?>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-md-4">
                <div class="card">
                    <?= form_open_multipart('pendaftaran'); ?>
                    <div class="card-header" style="background-color: #0b486b;">
                        <h4 class="card-title text-white">Foto <span class="text-danger">*</span></h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/img/profile/no-foto.png') ?>" alt="Foto Profil" class="d-fluid w-75">
                    </div>
                    <div class="card-footer">
                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input" id="image" required oninvalid="this.setCustomValidity('Foto tidak boleh kosong ..')" oninput="setCustomValidity('')">
                            <label class="custom-file-label" for="input-foto">Pilih Gambar</label>
                            <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #0b486b;">
                        <h4 class="card-title text-white">Masukan Data Diri Anda</h4>
                    </div>
                    <div class="card-body py-0 my-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap <span class="text-danger">*</span> : </label>
                                    <input type=" text" name="name" id="name" class="form-control" <?= set_value('name'); ?>>
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span> : </label>
                                    <input type="text" name="email" id="email" class=" form-control" <?= set_value('email'); ?>>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="no_telp">Nomor Telephon <span class="text-danger">*</span> : </label>
                                    <input type=" text" name="no_telp" id="no_telp" class="form-control" <?= set_value('no_telp'); ?>>
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir <span class="text-danger">*</span> : </label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" <?= set_value('tgl_lahir'); ?>>
                                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat <span class="text-danger">*</span> :</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" <?= set_value('alamat'); ?>></textarea>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-header" style="background-color: #0b486b;">
                        <h4 class="card-title text-white">Lampiran pdf</h4>
                    </div>
                    <div class="card-body border-top py-0 my-3">

                        <div class="col-xs-12 col-sm-6">
                            <label for="ijasah">Ijasah Trakhir <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ijasah" name="ijasah" required oninvalid="this.setCustomValidity('File tidak boleh kosong ..')" oninput="setCustomValidity('')">
                                <label class="custom-file-label" for="file">Pilih file</label>
                                <?= form_error('ijasah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 my-3">
                        <div class="col-xs-12 col-sm-6">
                            <label for="kartu_keluarga">Kartu Keluarga <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="kartu_keluarga" name="kartu_keluarga" required oninvalid="this.setCustomValidity('File tidak boleh kosong ..')" oninput="setCustomValidity('')">
                                <label class="custom-file-label" for="file">Pilih file</label>
                                <?= form_error('kartu_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row w-100">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block">Daftar <i class="fa fa-save"></i></button>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a class="btn btn-warning btn-block" href="<?= base_url('auth') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>



    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>


</body>

</html>