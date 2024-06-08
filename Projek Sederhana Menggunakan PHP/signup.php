<?php
require 'function.php';

if (isset($_POST['signup'])) {
  if (signup($_POST) > 0) {
    echo '<script>
    alert("success signup")
    // document.location.href = "index.php"
    </script>';
  } else {
    // echo '<script>
    // alert("error edit data")
    // </script>';
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>

<body>
  <h1>Signup</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="confirm_password">confirm your password :</label>
        <input type="password" name="confirm_password" id="confirm_password">
      </li>
      <li>
        <button type="submit" name="signup">Signup</button>
      </li>
    </ul>
  </form>
</body>

</html>