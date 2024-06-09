<?php
session_start();
if (!isset($_SESSION['signin'])) {
  header('Location: signin.php');
  exit;
}
require 'function.php';

$id = $_GET['id'];
$student = query("SELECT * FROM students WHERE id_student = $id");

if (isset($_POST['submit'])) {
  if(edit($_POST) > 0) {
    echo '<script>
    alert("success edit data")
    document.location.href = "index.php"
    </script>';
  } else {
    echo '<script>
    alert("error edit data")
    </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
</head>

<body>
  <h1>Edit Student</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_student" value="<?= $student[0]['id_student'] ?>">
    <input type="hidden" name="old_img" value="<?= $student[0]['img_student'] ?>">
    <ul>
      <li>
        <label for="nis_student">Input nis student:</label>
        <input type="number" name="nis_student" id="nis_student" value="<?= $student[0]['nis_student'] ?>" required>
      </li>
      <li>
        <label for="name_student">Input name student:</label>
        <input type="text" name="name_student" id="name_student" value="<?= $student[0]['name_student'] ?>" required>
      </li>
      <li>
        <label for="email_student">Input email student:</label>
        <input type="email" name="email_student" id="email_student" value="<?= $student[0]['email_student'] ?>" required>
      </li>
      <li>
        <label for="jurusan_student">Input major student:</label>
        <input type="text" name="jurusan_student" id="jurusan_student" value="<?= $student[0]['jurusan_student'] ?>" required>
      </li>
      <li>
        <label for="img_student">Input image student:</label>
        <img src="<?= $student[0]['img_student'] ?>" alt="<?= $student[0]['name_student'] ?>" width="40">
        <input type="file" name="img_student" id="img_student">
      </li>
      <li>
        <button type="submit" name="submit">Submit</button>
      </li>
    </ul>
  </form>
</body>

</html>