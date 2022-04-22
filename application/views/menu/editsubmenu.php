<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('menu/updateSubMenu') ?>" method="post">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                </div>
                <div class="form-group">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <?php foreach ($menu as $m) : ?>
                            <?php if ($m['id'] == $submenu['menu_id']) : ?>
                                <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                            <?php else : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_active" value="1" name="is_active" checked>
                        <label class="custom-control-label" for="is_active">Active</label>
                    </div>
                </div>

                <div class="form-grup row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="editMenu">Edit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->