<?php
require 'koneksi.php';

use MongoDB\BSON\ObjectId;

$id = $_GET['id'];

$collection->deleteOne([
    '_id' => new ObjectId($id)
]);

header("Location: index.php");