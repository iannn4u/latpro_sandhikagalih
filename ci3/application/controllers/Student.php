<?php
class Student extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Student_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'List of Students';
    $data['students'] = $this->Student_model->getAllStudents();
    $this->load->view('templates/header', $data);
    $this->load->view('student/index');
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $data['title'] = 'Add Students';
    $this->form_validation->set_rules('name_student', 'Name Student', 'required');
    $this->form_validation->set_rules('nis_student', 'NIS Student', 'required|numeric');
    $this->form_validation->set_rules('email_student', 'Email Student', 'required|valid_email');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('student/create');
      $this->load->view('templates/footer');
    } else {
      $this->Student_model->store();
      $this->session->set_flashdata('flash', 'added new student');
      redirect('student');
    }
  }

  public function delete($nis) {
    $this->Student_model->destroy($nis);
    $this->session->set_flashdata('flash', 'deleted one student');
    redirect('student');
  }
}
