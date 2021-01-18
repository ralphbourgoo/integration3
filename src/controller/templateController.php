<?php

require_once __DIR__ . '/Controller.php';

class TemplateController extends Controller {

  private $projectDAO;

  function __construct() {
    $this->projectDAO = new ProjectDAO();
  }

  public function index() {
    $this->set('title', 'Home');
  }

  public function winkel() {
    $this->set('title', 'Winkel');
  }

  public function winkelwagen() {
    $this->set('title', 'Winkelwagen');
  }

  public function formulier() {
    $this->set('title', 'Formulier');
  }

  public function bevestiging() {
    $this->set('title', 'Bevestiging');
  }

  public function checklist() {
    $this->set('title', 'Checklist');
  }

  public function startpage() {
    $this->set('title', 'Startpage');
  }

  public function tutorial() {
    $this->set('title', 'Tutorial');
  }

}
