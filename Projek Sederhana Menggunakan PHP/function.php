<?php
$conn = mysqli_connect('localhost', 'root', '', 'data_school');

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
};

function add($data)
{
  global $conn;
  $nis_student = htmlspecialchars($data['nis_student']);
  $name_student = htmlspecialchars($data['name_student']);
  $email_student = htmlspecialchars($data['email_student']);
  $jurusan_student = htmlspecialchars($data['jurusan_student']);

  $img_student = upload();
  if (!$img_student) {
    return false;
  }

  $query = "INSERT INTO students VALUES('0', '$name_student', '$nis_student', '$email_student', '$jurusan_student', 'img/$img_student')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $fileName = $_FILES['img_student']['name'];
  $fileSize = $_FILES['img_student']['size'];
  $fileError = $_FILES['img_student']['error'];
  $fileTmp = $_FILES['img_student']['tmp_name'];

  if ($fileError == 4) {
    echo '<script>
    alert("Chooise picture first")
    </script>';
    return false;
  }

  $extensionValid = ['jpg', 'jpeg', 'png'];
  $fileExtension = explode('.', $fileName);
  $fileExtension = strtolower(end($fileExtension));
  if(!in_array($fileExtension, $extensionValid)) {
    echo '<script>
    alert("Your file not picture")
    </script>';
    return false;
  }

  if($fileSize > 1000000) {
    echo '<script>
    alert("Your picture too large")
    </script>';
    return false;
  }

  $fileName = uniqid() . '.' . $fileExtension;
  move_uploaded_file($fileTmp, 'img/' . $fileName);

  return $fileName;
}

function delete($id)
{
  global $conn;

  $query = "DELETE FROM students WHERE id_student = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data['id_student'];
  $old_img = $data['old_img'];
  $nis_student = htmlspecialchars($data['nis_student']);
  $name_student = htmlspecialchars($data['name_student']);
  $email_student = htmlspecialchars($data['email_student']);
  $jurusan_student = htmlspecialchars($data['jurusan_student']);

  if($_FILES['img_student']['error'] == 4) {
    $img_student = $old_img;
  } else {
    $img_student = upload();
  }
  
  $query = "UPDATE students SET name_student = '$name_student', nis_student = '$nis_student', email_student = '$email_student', jurusan_student = '$jurusan_student', img_student = 'img/$img_student' WHERE id_student = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function search($keyword)
{
  $query = "SELECT * FROM students WHERE name_student LIKE '%$keyword%' OR nis_student LIKE '%$keyword%' OR email_student LIKE '%$keyword%' OR jurusan_student LIKE '%$keyword%'";

  return query($query);
}

function signup($data) {
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $confirm_password = mysqli_real_escape_string($conn, $data['confirm_password']);

  $result = mysqli_query($conn, "SELECT username_users FROM users WHERE username_users = '$username'");
  if(mysqli_fetch_assoc($result)) {
    echo '<script>
    alert("your username already use")
    </script>';

    return false;
  }

  if($password != $confirm_password) {
    echo '<script>
    alert("your password not same with confirm password")
    </script>';

    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn, "INSERT INTO users VALUES('0', '$username', '$password')");

  return mysqli_affected_rows($conn);
}