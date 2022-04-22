<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('menu/updateMenu') ?>" method="post">
                <input type="hidden" value="<?= $menu['id']; ?>" name="id">
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                    </div>
                </div>
                <div class="form-grup row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->