<?php
require 'koneksi.php';

use MongoDB\BSON\ObjectId;

$id = $_GET['id'];

$data = $collection->findOne([
    '_id' => new ObjectId($id)
]);

if(isset($_POST['update'])) {

    $collection->updateOne(
        ['_id' => new ObjectId($id)],
        [
            '$set' => [
                'nim' => $_POST['nim'],
                'nama' => $_POST['nama'],
                'jurusan' => $_POST['jurusan']
            ]
        ]
    );

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow-lg p-4">

        <h2 class="mb-4">Edit Mahasiswa</h2>

        <form method="POST">

            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control"
                       value="<?= $data['nim'] ?>" required>
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control"
                       value="<?= $data['nama'] ?>" required>
            </div>

            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control"
                       value="<?= $data['jurusan'] ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-primary">
                Update
            </button>

            <a href="index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>

</body>
</html>