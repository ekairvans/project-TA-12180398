<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message') ?>

        </div>
    </div>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->

    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #0b486b;">
            <div class="row">
                <div class="col-md">
                    <h6 class="m-0 font-weight-bold text-white"><?= $title ?></h6>
                </div>
                <div class="col-md">
                    <?php if ($user['role_id'] == 1) : ?>
                        <a href="<?= base_url('admin/excel'); ?>" class="btn btn-success shadow float-right mr-2">Excel <i class=" fa fa-file-excel"></i> </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Mengetik 10 Jari</th>
                            <th>Mengenal Windows</th>
                            <th>Mengenal Internet</th>
                            <th>Microsoft Word</th>
                            <th>Microsoft Excel</th>
                            <th>Microsoft PowerPoint</th>
                            <th>Absensi</th>
                            <th>Rata-Rata</th>
                            <?php if ($user['role_id'] == 1) : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $u) : ?>
                            <?php
                            $materi1 = $this->ModelKelas->nilaiMateri($u['nip'], 1)->row_array();
                            $materi2 = $this->ModelKelas->nilaiMateri($u['nip'], 2)->row_array();
                            $materi3 = $this->ModelKelas->nilaiMateri($u['nip'], 3)->row_array();
                            $materi4 = $this->ModelKelas->nilaiMateri($u['nip'], 4)->row_array();
                            $materi5 = $this->ModelKelas->nilaiMateri($u['nip'], 5)->row_array();
                            $materi6 = $this->ModelKelas->nilaiMateri($u['nip'], 6)->row_array();

                            $jmlmateri1 = $this->ModelKelas->totalMateri(1)->num_rows();
                            $jmlmateri2 = $this->ModelKelas->totalMateri(2)->num_rows();
                            $jmlmateri3 = $this->ModelKelas->totalMateri(3)->num_rows();
                            $jmlmateri4 = $this->ModelKelas->totalMateri(4)->num_rows();
                            $jmlmateri5 = $this->ModelKelas->totalMateri(5)->num_rows();
                            $jmlmateri6 = $this->ModelKelas->totalMateri(6)->num_rows();

                            $nilai1 = $materi1['jml'] / $jmlmateri1;
                            $nilai2 = $materi2['jml'] / $jmlmateri2;
                            $nilai3 = $materi3['jml'] / $jmlmateri3;
                            $nilai4 = $materi4['jml'] / $jmlmateri4;
                            $nilai5 = $materi5['jml'] / $jmlmateri5;
                            $nilai6 = $materi6['jml'] / $jmlmateri6;

                            $jmlAbsen = $this->ModelKelas->nilaiAbsen($u['nip'], 1)->num_rows();
                            $totalAbsen = $this->ModelKelas->totalAbsen()->num_rows();
                            $nilaiAbsen = ($jmlAbsen / $totalAbsen) * 100;

                            $nilairata = ($nilai1 * 0.15) + ($nilai2 * 0.15) + ($nilai3 * 0.15) + ($nilai4 * 0.15) + ($nilai5 * 0.15) + ($nilai6 * 0.15) + ($nilaiAbsen * 0.10)

                            ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $u['nip'] ?></td>
                                <td><?= $u['name'] ?></td>
                                <td style="text-align: center;"><?= number_format($nilai1); ?></td>
                                <td style="text-align: center;"><?= number_format($nilai2); ?></td>
                                <td style="text-align: center;"><?= number_format($nilai3); ?></td>
                                <td style="text-align: center;"><?= number_format($nilai4); ?></td>
                                <td style="text-align: center;"><?= number_format($nilai5); ?></td>
                                <td style="text-align: center;"><?= number_format($nilai6); ?></td>
                                <td><?= number_format($nilaiAbsen) ?></td>
                                <td><?= number_format($nilairata) ?></td>
                                <?php if ($user['role_id'] == 1) : ?>
                                    <td>
                                        <a href="<?= base_url('admin/print/' . $u['id']); ?>" class="btn btn-success shadow float-right mr-2">Print</i> </a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->





<div class="modal fade" id="exampleModalProduct" tabindex="-1" aria-labelledby="exampleModalLabelSub" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ff6781;">
                <h5 class="modal-title text-white" id="exampleModalLabelSub">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin'); ?>
            <input type="hidden" value="<?= $user['id_user']; ?>" name="id_user">
            <input type="hidden" value="<?= date('d-m-Y', time()) ?>" name="date_supplier">
            <div class="modal-body">
                <div class="form-group">
                    <select name="supplier" id="supplier" class="form-control">
                        <option value="">Select Supplier</option>
                        <?php foreach ($supplier as $s) : ?>
                            <option value="<?= $s['id_supplier']; ?>"><?= $s['nama_supplier']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="item" id="item" class="form-control">
                        <option value="">Select Item</option>
                        <?php foreach ($item as $it) : ?>
                            <option value="<?= $it['id_item']; ?>"><?= $it['name_item']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty">
                </div>
                <div class="custom-file mb-3">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="input-foto">Select Image</label>
                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
            </>
        </div>
    </div>
</div>