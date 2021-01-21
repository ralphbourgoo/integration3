<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WinkelDAO.php';

class TemplateController extends Controller {

  private $winkelDAO;

  function __construct() {
    $this->winkelDAO = new WinkelDAO();
  }

  public function index() {
    $this->set('title', 'Home');
  }

  public function winkel() {
    $products = $this->winkelDAO->selectAllProducts();

    $this->set('products', $products);
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
