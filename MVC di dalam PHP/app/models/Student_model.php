<?php
class Student_model
{
  private $table = 'students', $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getStudents()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getStudentById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_student=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function addStudent($data)
  {
    $query = "INSERT INTO students VALUES('0', :name_student, :nis_student, :email_student, :jurusan_student, :img_student)";
    $this->db->query($query);
    $this->db->bind('name_student', $data['name_student']);
    $this->db->bind('nis_student', $data['nis_student']);
    $this->db->bind('email_student', $data['email_student']);
    $this->db->bind('jurusan_student', $data['jurusan_student']);
    $this->db->bind('img_student', 'img/pas-foto-polos.jpeg');
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deleteStudent($id)
  {
    $query = "DELETE FROM students WHERE id_student=:id_student";
    $this->db->query($query);
    $this->db->bind('id_student', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function editStudent($data)
  {
    $query = "UPDATE students SET name_student=:name_student, nis_student=:nis_student, email_student=:email_student, jurusan_student=:jurusan_student, img_student=:img_student WHERE id_student=:id_student";
    $this->db->query($query);
    $this->db->bind('name_student', $data['name_student']);
    $this->db->bind('nis_student', $data['nis_student']);
    $this->db->bind('email_student', $data['email_student']);
    $this->db->bind('jurusan_student', $data['jurusan_student']);
    $this->db->bind('img_student', 'img/pas-foto-polos.jpeg');
    $this->db->bind('id_student', $data['id_student']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function searchStudent()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM students WHERE name_student LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
