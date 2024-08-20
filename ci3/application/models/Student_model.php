<?php 

use GuzzleHttp\Client;

class Student_model extends CI_Model {
  private $_client;

  public function __construct() {
    $this->_client = new Client([
      'base_uri' => 'http://rest-server.test/',
      'auth' => ['admin', '1234'],
    ]);
  }
  
  public function getAllStudents() {
    // return $this->db->get('students')->result_array();
    $response = $this->_client->request('GET', 'mahasiswa', [
      'query' => [
        'X-API-KEY' => 'iannn4u',
      ]
      ]);

      $result = json_decode($response->getBody()->getContents(),true);

      return $result['data'];
  }

  public function getStudent($nrp) {
    $response = $this->_client->request('GET', 'mahasiswa', [
      'query' => [
        'X-API-KEY' => 'iannn4u',
        'nrp' => $nrp
      ]
      ]);

      $result = json_decode($response->getBody()->getContents(),true);

      return $result['data'][0];
  }

  public function store() {
    // $this->db->insert('students', $_POST);
    $data = [
      'nama' => $this->input->post('nama', true),
      'nrp' => $this->input->post('nrp', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'X-API-KEY' => 'iannn4u'
    ];
    $response = $this->_client->request('POST', 'mahasiswa', [
      'form_params' => $data
      ]);

      $result = json_decode($response->getBody()->getContents(),true);

      return $result;
  }

  public function destroy($id) {
    // $this->db->where('nis_student', $nis);
    // $this->db->delete('students', ['nis_student' => $nis]);
    $response = $this->_client->request('DELETE', 'mahasiswa', [
      'form_params' => [
        'X-API-KEY' => 'iannn4u',
        'id' => $id
      ]
      ]);

      $result = json_decode($response->getBody()->getContents(),true);

      return $result;
  }

  // public function getStudent($nis) {
  //   return $this->db->get_where('students', ['nis_student'=> $nis])->row_array();
  // }

  public function edit() {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nrp' => $this->input->post('nrp', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'X-API-KEY' => 'iannn4u'
    ];
    $response = $this->_client->request('POST', 'mahasiswa', [
      'form_params' => $data
      ]);

      $result = json_decode($response->getBody()->getContents(),true);

      return $result;
    $this->db->update('students', $_POST);
  }

  public function searchStudent() {
    $keyword = $this->input->post('keyword');
    $this->db->like('name_student', $keyword);
    $this->db->or_like('nis_student', $keyword);
    $this->db->or_like('email_student', $keyword);
    $this->db->or_like('major_student', $keyword);
    return $this->db->get('students')->result_array();
  }
}