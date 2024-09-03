<?php
include $_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['SERVER_NAME'].'/gh/inc/config/config.php';
$sql = 'SELECT id, name FROM categories WHERE parent_id IS NULL';
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

header('Content-Type: application/json; charset=UTF8');
echo json_encode($rows);
