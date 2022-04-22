<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?> " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <style>
        .sertifikat {
            /* writing-mode: tb-rl;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(180deg);
            white-space: nowrap;
            float: left; */
            font-size: 100px;
            letter-spacing: 8px;
        }

        .tab-table,
        th,
        td {
            border: 1px solid #999;
            padding: 2px 50px;
        }

        .h5-text {
            margin-left: 90px;
        }

        @media print {

            @page {
                margin-top: 30px;
                margin-bottom: 10px;
            }

            .h5-text {
                margin-left: 260px;
            }

            .kiri-text {
                position: fixed;
                right: -100px;
            }

            .kanan-text {
                position: fixed;
                right: -700px;
            }

            .tab-table {
                margin-bottom: 100px;
            }
        }
    </style>
</head>

<body id="page-top" style="height: 100%;">

    <!-- Page Wrapper -->


    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #0b486b;">
                <div class="row">

                    <div class="col-md">
                        <a href="<?= base_url('admin/nilaiRaport'); ?>" class="btn btn-primary shadow mr-2">Kembali</a>
                    </div>

                    <div class="col-md">
                        <button onclick="window.print()" class="btn btn-success shadow">Print <i class="fa fa-print"></i> </button>
                    </div>
                </div>

            </nav>
            <!-- End of Topbar -->

            <div id="wrapper">


                <div class="container-fluid">
                    <ul class="navbar-nav" style="background-color: #FFA500;">
                        <center>

                            <h1 class="sertifikat text-white">SERTIFIKAT</h1>
                        </center>
                    </ul>
                    <center class="mt-3">
                        <img src="<?= base_url('assets/img/HopeLogo.png') ?>" width="170px">
                        <h3 style="color:#FFA500;"><b>HOPE COMPUTER TRAINING CENTER</h3>
                        <hr>
                    </center>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h5 class="text-dark h5-text"><b>Nama : <?= $siswa['name'] ?></h5>
                            <h5 class="text-dark h5-text"><b>NIP : <?= $siswa['nip'] ?></h5>

                            <?php
                            $materi1 = $this->ModelKelas->nilaiMateri($siswa['nip'], 1)->row_array();
                            $materi2 = $this->ModelKelas->nilaiMateri($siswa['nip'], 2)->row_array();
                            $materi3 = $this->ModelKelas->nilaiMateri($siswa['nip'], 3)->row_array();
                            $materi4 = $this->ModelKelas->nilaiMateri($siswa['nip'], 4)->row_array();
                            $materi5 = $this->ModelKelas->nilaiMateri($siswa['nip'], 5)->row_array();
                            $materi6 = $this->ModelKelas->nilaiMateri($siswa['nip'], 6)->row_array();

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

                            $jmlAbsen = $this->ModelKelas->nilaiAbsen($siswa['nip'], 1)->num_rows();
                            $totalAbsen = $this->ModelKelas->totalAbsen()->num_rows();
                            $nilaiAbsen = ($jmlAbsen / $totalAbsen) * 100;

                            $nilairata = ($nilai1 * 0.15) + ($nilai2 * 0.15) + ($nilai3 * 0.15) + ($nilai4 * 0.15) + ($nilai5 * 0.15) + ($nilai6 * 0.15) + ($nilaiAbsen * 0.10)

                            ?>
                            <center>
                                <table class="tab-table mb-5">
                                    <thead>
                                        <tr>
                                            <th style="padding:0px 15px;"><b>No</th>
                                            <th style="text-align: center;"><b>Materi</th>
                                            <th style="text-align: center;"><b>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding:0px 15px;">1</td>
                                            <td>Mengetik 10 Jari</td>
                                            <td style="text-align: center;"><?= number_format($nilai1); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 15px;">2</td>
                                            <td>Mengenal Windows</td>
                                            <td style="text-align: center;"><?= number_format($nilai2); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 15px;">3</td>
                                            <td>Mengenal Internet</td>
                                            <td style="text-align: center;"><?= number_format($nilai3); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 15px;">4</td>
                                            <td>Microsoft Word</td>
                                            <td style="text-align: center;"><?= number_format($nilai4); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 15px;">5</td>
                                            <td>Microsoft Excel</td>
                                            <td style="text-align: center;"><?= number_format($nilai5); ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 15px;">6</td>
                                            <td>Microsoft Power Point</td>
                                            <td style="text-align: center;"><?= number_format($nilai6); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </center>



                        </div>
                        <div class="col-lg-3"></div>

                    </div>
                    <div class="row mb-5">

                        <div class="col-lg-2"></div>
                        <div class="col-lg-3 kiri-text">
                            <h4 class="ml-4">Mengetahui</h4>
                            <br><br>
                            <h4>Program Manager</h4>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-3 kanan-text">
                            <h4>Jakarta, <?= date('d F Y', strtotime("now")) ?></h4>
                            <br><br>
                            <h4 class="ml-5">Intruktur</h4>
                        </div>
                        <div class="col-lg-2"></div>


                    </div>
                </div>


            </div>
        </div>
    </div>


</body>

</html>