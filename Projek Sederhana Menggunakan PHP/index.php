<?php
session_start();
if (!isset($_SESSION['signin'])) {
  header('Location: signin.php');
  exit;
}
require_once 'function.php';

$students = query('SELECT * FROM students');
if (isset($_GET['id'])) {
  if (delete($_GET['id']) > 0) {
    echo '<script>
    alert("success delete data")
    document.location.href = "index.php"
    </script>';
  } else {
    echo '<script>
    alert("error delete data")
    document.location.href = "index.php"
    </script>';
  }
}

// $jumlahDataPerHalaman = 2;
// $jumlahData = count(query('SELECT * FROM students'));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanActive = (isset($_GET['page'])) ? $_GET['page'] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanActive) - $jumlahDataPerHalaman;
// $students = query("SELECT * FROM students LIMIT $awalData, $jumlahDataPerHalaman");
$students = query("SELECT * FROM students");

if (isset($_POST['cari'])) {
  $students = search($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <style>
    #spinner {
      width: 100px;
      position: absolute;
      top: 115px;
      left: 300px;
      z-index: -1;
      display: none;
    }

    @media print {
      .print {
        display: none;
      }
    }
  </style>
</head>

<body>
  <a href="signout.php" class="print">Signout</a> | <a href="print.php" target="_blank">Cetak</a>
  <h1>List of Students</h1>

  <a href="add.php" class="print">Add student</a>
  <br><br>

  <form action="" method="post" class="print">
    <input type="search" name="keyword" size="40" autofocus placeholder="Input you want search..." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="search">Search</button>
    <img src="spinner.gif" id="spinner">
  </form>
  <!-- <?php // if ($halamanActive > 1) : 
        ?>
    <a href="?page=<?= $halamanActive - 1; ?>">&laquo;</a>
  <?php // endif; 
  ?>
  <?php // for ($i = 1; $i <= $jumlahHalaman; $i++) : 
  ?>
    <?php // if ($i == $halamanActive) : 
    ?>
      <a href="?page=<?= $i ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
    <?php // else : 
    ?>
      <a href="?page=<?= $i ?>"><?= $i ?></a>
    <?php // endif; 
    ?>
  <?php // endfor; 
  ?>
  <?php // if ($halamanActive < $jumlahHalaman) : 
  ?>
    <a href="?page=<?= $halamanActive + 1; ?>">&raquo;</a>
  <?php // endif; 
  ?> -->
  <br>
  <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <th>No.</th>
        <th>Picture</th>
        <th>NIS</th>
        <th>Name</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php $iterration = 1; ?>
        <?php foreach ($students as $s) : ?>
          <tr>
            <td><?= $iterration; ?></td>
            <td><img src="<?= $s['img_student'] ?>" alt="<?= $s['name_student'] ?>" width="50"></td>
            <td><?= $s['nis_student'] ?></td>
            <td><?= $s['name_student'] ?></td>
            <td><?= $s['email_student'] ?></td>
            <td><?= $s['jurusan_student'] ?></td>
            <td>
              <a href="edit.php?id=<?= $s['id_student'] ?>">Edit</a>
              <a href="index.php?id=<?= $s['id_student'] ?>" onclick="return confirm('Are you seriuos to delete this data?')">Delete</a>
            </td>
          </tr>
          <?php $iterration++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="jquery-3.7.1.min.js"></script>
  <script src="script.js"></script>
</body>

</html>