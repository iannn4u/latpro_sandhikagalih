<?php
class Home extends Controller {
  public function index() {
    $data['owner'] = 'iannn4u';

    $this->view("templates/header");
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }
}