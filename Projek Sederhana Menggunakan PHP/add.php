<?php
require 'function.php';

if (isset($_POST['submit'])) {
  if(add($_POST) > 0) {
    echo '<script>
    alert("success add data")
    document.location.href = "index.php"
    </script>';
  } else {
    echo '<script>
    alert("error add data")
    </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
</head>

<body>
  <h1>Add Student</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nis_student">Input nis student:</label>
        <input type="number" name="nis_student" id="nis_student" required>
      </li>
      <li>
        <label for="name_student">Input name student:</label>
        <input type="text" name="name_student" id="name_student" required>
      </li>
      <li>
        <label for="email_student">Input email student:</label>
        <input type="email" name="email_student" id="email_student" required>
      </li>
      <li>
        <label for="jurusan_student">Input major student:</label>
        <input type="text" name="jurusan_student" id="jurusan_student" required>
      </li>
      <li>
        <label for="img_student">Input image student:</label>
        <input type="file" name="img_student" id="img_student" required>
      </li>
      <li>
        <button type="submit" name="submit">Submit</button>
      </li>
    </ul>
  </form>
</body>

</html>