<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('user'); ?>" style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
                                    Pengajar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->ModelUser->getuserId(2)->num_rows(); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-user-tie fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('user/siswa'); ?>" style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-3">
                                    Siswa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->ModelUser->getuserId(3)->num_rows(); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-user-graduate fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-3">
                                Nilai Raport</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a class="badge badge-info" href="<?= base_url('admin/nilaiRaport'); ?>">Detail</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('pendaftaran/listPendaftar'); ?>" style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-3">
                                    Pendaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->ModelUser->getjmlpendaftar()->num_rows(); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-user-plus fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->