<?php

require_once( __DIR__ . '/DAO.php');

class ClientDAO extends DAO {

public function selectClientById($id){
    $sql = "SELECT * FROM `clients` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertClient($data){
    $errors = $this->validate($data);
    if (empty($errors)){
      $sql = "INSERT INTO `clients` (`voornaam`, `achternaam`, `email`, `straat`, `huisnummer`, `stad`, `postcode`, `land`)
    VALUES (:voornaam, :achternaam, :email, :straat, :huisnummer, :stad, :postcode, :land)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':voornaam', $data['voornaam']);
    $stmt->bindValue(':achternaam', $data['achternaam']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':straat', $data['straat']);
    $stmt->bindValue(':huisnummer', $data['huisnummer']);
    $stmt->bindValue(':stad', $data['stad']);
    $stmt->bindValue(':postcode', $data['postcode']);
    $stmt->bindValue(':land', $data['land']);
    if ($stmt->execute()) {
      return $this->selectClientById($this->pdo->lastInsertId());
  }
  }
  return false;
}
  public function validate($data){
    $errors = [];
    if (empty($data['voornaam'])) {
      $errors['voornaam'] = 'Voornaam is required.';
    }
    if (empty($data['achternaam'])) {
      $errors['achternaam'] = 'Achternaam is required.';
    }
    if (empty($data['email'])) {
      $errors['email'] = 'Email is required.';
    }
    if (empty($data['straat'])) {
      $errors['straat'] = 'Straat is required.';
    }
    if (empty($data['huisnummer'])) {
      $errors['huisnummer'] = 'Huisnummer is required.';
    }
    if (empty($data['stad'])) {
      $errors['stad'] = 'Stad is required.';
    }
    if (empty($data['postcode'])) {
      $errors['postcode'] = 'Postcode is required.';
    }
    if (empty($data['land'])) {
      $errors['land'] = 'Please choose your country.';
    }
    return $errors;
  }
}
