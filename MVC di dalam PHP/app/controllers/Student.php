<?php
class Student extends Controller
{
  public function index()
  {
    $data['students'] = $this->model('Student_model')->getStudents();

    $this->view("templates/header");
    $this->view("student/index", $data);
    $this->view("templates/footer");
  }

  public function detail($id)
  {
    $data['student'] = $this->model('Student_model')->getStudentById($id);

    $this->view("templates/header");
    $this->view("student/detail", $data);
    $this->view("templates/footer");
  }

  public function add()
  {
    if ($this->model('Student_model')->addStudent($_POST) > 0) {
      Flasher::setFlash('successfull', 'added', 'success');
      header('Location: ' . BASEURL . 'student');
      exit;
    } else {
      Flasher::setFlash('error', 'added', 'danger');
      header('Location: ' . BASEURL . 'student');
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model('Student_model')->deleteStudent($id) > 0) {
      Flasher::setFlash('successfull', 'deleted', 'success');
      header('Location: ' . BASEURL . 'student');
      exit;
    } else {
      Flasher::setFlash('error', 'deleted', 'danger');
      header('Location: ' . BASEURL . 'student');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Student_model')->getStudentById($_POST['id_student']));
  }

  public function edit()
  {
    if ($this->model('Student_model')->editStudent($_POST) > 0) {
      Flasher::setFlash('successfull', 'edit', 'success');
      header('Location: ' . BASEURL . 'student');
      exit;
    } else {
      Flasher::setFlash('error', 'edit', 'danger');
      header('Location: ' . BASEURL . 'student');
      exit;
    }
  }

  public function search() {
    $data['students'] = $this->model('Student_model')->searchStudent();

    $this->view("templates/header");
    $this->view("student/index", $data);
    $this->view("templates/footer");
  }
}
