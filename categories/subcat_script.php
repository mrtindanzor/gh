<?php
include $_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['SERVER_NAME'].'/gh/inc/config/config.php';
$data = file_get_contents('php://input');
$newdata = json_decode($data, true);
$category_id = $newdata['id'];

$sql = 'SELECT * FROM categories WHERE parent_id = :parent_id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':parent_id', $category_id);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

header('Content-Type: application/json; charset=UTF8');
echo json_encode($rows);
