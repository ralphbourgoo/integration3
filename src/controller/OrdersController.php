<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WinkelDAO.php';
require_once __DIR__ . '/../dao/ClientDAO.php';
require_once __DIR__ . '/../dao/OrderDAO.php';

class OrdersController extends Controller {

  private $winkelDAO;
  private $ClientDAO;
  private $OrderDAO;

  function __construct() {
    $this->winkelDAO = new WinkelDAO();
    $this->clientDAO = new ClientDAO();
    $this->orderDAO = new OrderDAO();
  }

  public function winkelwagen() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        header('Location: index.php?page=winkel&id=' . $_POST['id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      header('Location: index.php?page=winkelwagen');
      exit();
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=winkelwagen');
      exit();
    }
    $this->set('title', 'Winkelwagen');
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['id']])) {
      $product = $this->winkelDAO->selectProductById($_POST['id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['id']]['quantity']++;
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $idd => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$idd]);
      }
    }
  }

  private function _handleRemove() {
    // var_dump($_POST);
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $id => $quantity) {
      if (!empty($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  public function formulier() {
    foreach($_SESSION['cart'] as $cart)

    if(!empty($_POST['action_order'])){
      if($_POST['action_order'] == 'insertOrder'){
          $data = array(
            'titel' => $cart['product']['titel'],
            'versie' => $cart['product']['versie'],
            'amount' => $cart['quantity'],
          );
        $insertedOrder = $this->orderDAO->insertOrder($data);
      }
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertClient'){
        $data = array(
          'voornaam' => $_POST['voornaam'],
          'achternaam' => $_POST['achternaam'],
          'email' => $_POST['email'],
          'straat' => $_POST['straat'],
          'huisnummer' => $_POST['huisnummer'],
          'stad' => $_POST['stad'],
          'postcode' => $_POST['postcode'],
          'land' => $_POST['land'],
        );
        $insertedClient = $this->clientDAO->insertClient($data);
        if(empty($insertedClient)){
          $errors = $this->clientDAO->validate($data);
          $this->set('errors',$errors);
        }
      }
    }

    if (!empty($_POST['action_unset'])) {
      if ($_POST['action_unset'] == 'unset') {
      $this->_handleUnset();
      header('Location: index.php?page=bevestiging');
      exit();
    }
    }

    $this->set('title', 'Formulier');
  }

  private function _handleUnset() {
    session_unset();
  }
}
