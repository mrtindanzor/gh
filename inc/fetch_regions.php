<?php
if($_SERVER['REQUEST_METHOD' == 'POST']){
  include 'config/config.php';
  $sql = 'SELECT id, name FROM regions';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

  header('Content-Type: application/json; charset=UTF8');
  echo json_encode($rows);
}
 ?>
