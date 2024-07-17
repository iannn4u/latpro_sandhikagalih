<?php 
class Student_model extends CI_Model {
  public function getAllStudents() {
    return $this->db->get('students')->result_array();
  }

  public function store() {
    $this->db->insert('students', $_POST);
  }

  public function destroy($nis) {
    $this->db->where('nis_student', $nis);
    $this->db->delete('students');
  }
}