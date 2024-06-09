<?php
require 'function.php';
session_start();
if (isset($_COOKIE['id'])&& isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  $result = mysqli_query($conn, "SELECT username_users FROM users WHERE id_users = $id");
  $row = mysqli_fetch_assoc($result);
  if($key == hash('sha256', $row['username'])) {
    $_SESSION['signin'] = true;
  }
}
if (isset($_SESSION['signin'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username_users = '$username'");

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password_users'])) {
      $_SESSION['signin'] = true;

      if (isset($_POST['remember'])) {
        setcookie('id', $row['id_users'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
</head>

<body>
  <h1>Signin</h1>

  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <i style="color: red;">username/password invalid</i>
    <?php endif; ?>
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
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">remember me :</label>
      </li>
      <li>
        <button type="submit" name="signin">Signin</button>
      </li>
    </ul>
  </form>
</body>

</html>