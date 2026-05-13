<?php
require 'koneksi.php';

$mahasiswa = $db->mahasiswa->find();
$dosen = $db->dosen->find();
$matakuliah = $db->matakuliah->find();
$kelas = $db->kelas->find();
$jadwal = $db->jadwal->find();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Akademik MongoDB</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-5">

    <h1 class="text-center mb-5">
        Dashboard Akademik MongoDB
    </h1>

    <!-- MAHASISWA -->
    <div class="card shadow-lg p-4 mb-5">
        <h3>Data Mahasiswa</h3>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['jurusan'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- DOSEN -->
    <div class="card shadow-lg p-4 mb-5">
        <h3>Data Dosen</h3>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Bidang</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($dosen as $dsn): ?>
                <tr>
                    <td><?= $dsn['nidn'] ?></td>
                    <td><?= $dsn['nama'] ?></td>
                    <td><?= $dsn['bidang'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- MATA KULIAH -->
    <div class="card shadow-lg p-4 mb-5">
        <h3>Data Mata Kuliah</h3>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>SKS</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($matakuliah as $mk): ?>
                <tr>
                    <td><?= $mk['kode'] ?></td>
                    <td><?= $mk['nama'] ?></td>
                    <td><?= $mk['sks'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- KELAS -->
    <div class="card shadow-lg p-4 mb-5">
        <h3>Data Kelas</h3>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Kode Kelas</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($kelas as $kls): ?>
                <tr>
                    <td><?= $kls['kode_kelas'] ?></td>
                    <td><?= $kls['semester'] ?></td>
                    <td><?= $kls['jurusan'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- JADWAL -->
    <div class="card shadow-lg p-4 mb-5">
        <h3>Data Jadwal</h3>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($jadwal as $jdw): ?>
                <tr>
                    <td><?= $jdw['hari'] ?></td>
                    <td><?= $jdw['jam'] ?></td>
                    <td><?= $jdw['matakuliah'] ?></td>
                    <td><?= $jdw['dosen'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>