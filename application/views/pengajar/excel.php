<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Nilai Raport.xls");
?>

<html>

<body>
    <table border="1">
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

                $jmlAbsen = $this->ModelKelas->nilaiAbsen($u['nip'])->num_rows();
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
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>