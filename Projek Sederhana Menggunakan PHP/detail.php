<?php
  if(!isset($_GET['nama']) ||!isset($_GET['img']) ||!isset($_GET['email'])|| !isset($_GET['jurusan'])) {
    header('Location: index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Siswa</title>
</head>
<body>
  <ul>
    <li><img src="<?= $_GET['img']?>" alt="Alandrian Surya Tantra" height="200"></li>
    <li><?= $_GET['nama']?></li>
    <li><?= $_GET['email']?></li>
    <li><?= $_GET['jurusan']?></li>
  </ul>
  <a href="index.php">Kembali</a>
</body>
</html>