<?php
include '../inc/config/config.php';
$advertId = $_GET['id'];
$status = $_GET['status'];
if($status == 1) {
  $status = 0;
} else{
  $status = 1;
}
$sql = 'UPDATE adverts SET status = :status WHERE id = :advertId';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":status", $status);
$stmt->bindParam(":advertId", $advertId);
$stmt->execute();