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
  $img_student = htmlspecialchars($data['img_student']);

  $query = "INSERT INTO students VALUES('0', '$name_student', '$nis_student', '$email_student', '$jurusan_student', '$img_student')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($id) {
  global $conn;

  $query = "DELETE FROM students WHERE id_student = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data['id_student'];
  $nis_student = htmlspecialchars($data['nis_student']);
  $name_student = htmlspecialchars($data['name_student']);
  $email_student = htmlspecialchars($data['email_student']);
  $jurusan_student = htmlspecialchars($data['jurusan_student']);
  $img_student = htmlspecialchars($data['img_student']);

  $query = "UPDATE students SET name_student = '$name_student', nis_student = '$nis_student', email_student = '$email_student', jurusan_student = '$jurusan_student', img_student = '$img_student' WHERE id_student = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}