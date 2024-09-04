<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'config/config.php';
  $data = file_get_contents('php://input');
  $newdata = json_decode($data, true);
  $region_id = $newdata['id'];
  $sql = 'SELECT id, name FROM cities WHERE region_id = :region_id';
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':region_id', $region_id);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

  header('Content-Type: application/json; charset=UTF8');
  echo json_encode($rows);
}