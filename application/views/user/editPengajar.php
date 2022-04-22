<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">
        <div class="col-lg-6">

            <form action="<?= base_url('user/editPengajar'); ?>" method="post">
                <input type="hidden" value="<?= $pengajar['id']; ?>" name="id">
                <div class="modal-body">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="<?= $pengajar['nip']; ?>">
                        </div>
                    </div>
                    <div class="form-group m-0">
                        <div class="input-group">
                            <label for="nip" class="col-sm-2 col-form-label">Password</label>
                            <input type="Password" name="password" class="form-control" id="password" value="<?= $pengajar['password']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_active" value="1" name="is_active" checked>
                        <label class="custom-control-label" for="is_active">Active</label>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->