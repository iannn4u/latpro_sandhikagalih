<?php
if(isset($_POST['login'])) {
  if($_POST['username'] == 'admin' && $_POST['password'] == '123') {
    header('Location: index.php');
    exit;
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if(isset($error)) : ?>
    <h2>Username atau password salah</h2>
  <?php endif; ?>
  <form action="" method="post">
    <label for="username">Masukkan username: <br></label>
    <input type="text" id="username" name="username"><br>

    
    <label for="password">Masukkan password: <br></label>
    <input type="password" id="password" name="password"><br>
    
    <button type="submit" name="login">Login</button>
  </form>
</body>
</html>