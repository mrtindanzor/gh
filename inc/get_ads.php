<?php 
include 'config/config.php';
$sql = 'SELECT adverts.*, Min(adverts_images.images) as images FROM adverts INNER JOIN adverts_images WHERE adverts.id = adverts_images.advertId AND adverts.status = 1 GROUP BY adverts.id ORDER BY adverts.id DESC;
';
$status = 1;
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
header('Content-Type: application/json; charset=UTF8');
echo json_encode($rows);