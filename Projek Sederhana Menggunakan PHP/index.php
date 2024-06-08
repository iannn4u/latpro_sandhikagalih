<?php
require_once 'function.php';

$students = query('SELECT * FROM students');
if(isset($_GET['id'])){
  if(delete($_GET['id']) > 0) {
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
</head>

<body>
  <h1>List of Students</h1>

  <a href="add.php">Add student</a>
  <br>

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
</body>

</html>