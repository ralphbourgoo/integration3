<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

  public function selectOrderById($id){
    $sql = "SELECT * FROM `orders` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


  public function insertOrder($data){
    $sql = "INSERT INTO `orders` (`titel`,`versie`,`amount`) VALUES(:titel,:versie,:amount)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':titel',$data['titel']);
    $stmt->bindValue(':versie',$data['versie']);
    $stmt->bindValue(':amount',$data['amount']);
    if($stmt->execute()){
      return $this->selectOrderById($this->pdo->lastInsertId());
  }
}

}
