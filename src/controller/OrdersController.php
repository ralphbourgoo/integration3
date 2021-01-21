<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WinkelDAO.php';

class OrdersController extends Controller {

  private $winkelDAO;

  function __construct() {
    $this->winkelDAO = new WinkelDAO();
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

}
