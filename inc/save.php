<?php
session_start();
include 'config/config.php';
$userId = $_SESSION['id'];
if(isset($_GET['save']) && $_GET['save'] == 'true'){
$advertId = $_GET['id'];
  $query = 'SELECT * FROM saved_ads WHERE userId = :userId AND advertId =  :advertId';
$stmt = $conn->prepare($query);
$stmt->bindParam(':userId' ,$userId );
$stmt->bindParam(':advertId', $advertId);
$stmt->execute();
if($stmt->rowCount() < 1) {
  $query = 'INSERT INTO saved_ads (userId, advertId) VALUES (:userId, :advertId)';
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':userId' ,$userId );
  $stmt->bindParam(':advertId', $advertId);
  $stmt->execute();
  
  if($stmt->rowCount() > 0) {
    $response['status'] = 1;
    echo json_encode($response);
  }
} else {
  $sql = 'DELETE saved_ads FROM saved_ads WHERE userId = :userId AND advertId =  :advertId';
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':userId' ,$userId );
  $stmt->bindParam(':advertId', $advertId);
  $stmt->execute();
  
  if($stmt->rowCount() > 0) {
    $response['status'] = 0;
    echo json_encode($response);
  }
    }
}

if(isset($_GET['get_saved']) && $_GET['get_saved'] == 'true'){
$query = 'SELECT * FROM saved_ads WHERE userId = :userId';
$stmt = $conn->prepare($query);
$stmt->bindParam(':userId' ,$userId );
$stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
if($stmt->rowCount() > 0) {
  echo json_encode($rows);
}
}