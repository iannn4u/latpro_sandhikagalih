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
    if ($this->input->post('keyword')) {
      $data['students'] = $this->Student_model->searchStudent();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('student/index');
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $data['title'] = 'Add Student';
    $this->form_validation->set_rules('nama', 'Name Student', 'required');
    $this->form_validation->set_rules('nrp', 'NRP Student', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email Student', 'required|valid_email');
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

  public function delete($nis)
  {
    $this->Student_model->destroy($nis);
    $this->session->set_flashdata('flash', 'deleted one student');
    redirect('student');
  }

  public function detail($nis)
  {
    $data['title'] = 'Detail student';
    $data['student'] = $this->Student_model->getStudent($nis);
    $this->load->view('templates/header', $data);
    $this->load->view('student/detail');
    $this->load->view('templates/footer');
  }

  public function edit($nis)
  {
    $data['title'] = 'Edit Student';
    $data['student'] = $this->Student_model->getStudent($nis);
    $data['jurusan'] = ["Rekayasa Perangkat Lunak", "Teknik Kendaraan Ringan", "Teknik Audio Video", "Teknik Infromatika"];
    $this->form_validation->set_rules('nama', 'Name Student', 'required');
    $this->form_validation->set_rules('nrp', 'NIS Student', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email Student', 'required|valid_email');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('student/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Student_model->edit();
      $this->session->set_flashdata('flash', 'edited a student');
      redirect('student');
    }
  }
}
