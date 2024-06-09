<?php
sleep(1);
require 'function.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM students WHERE name_student LIKE '%$keyword%' OR nis_student LIKE '%$keyword%' OR email_student LIKE '%$keyword%' OR jurusan_student LIKE '%$keyword%'";
$students = query($query);
?>
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