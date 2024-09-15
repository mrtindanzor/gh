<?php 
include 'config/config.php';
// $data = file_get_contents('php://input');
// $decoded_data = json_decode($data);
// if(!empty($decoded_data['maincate'])) $sql = '';
// if(!empty($decoded_data['subcat'])) $sql = '';
// if(!empty($decoded_data['regionId'])) $sql = '';
// if(!empty($decoded_data['cityId'])) $sql = '';
$sql = 'SELECT adverts.*, Min(adverts_images.images) as images FROM adverts INNER JOIN adverts_images WHERE adverts.id = adverts_images.advertId GROUP BY adverts.id ORDER BY adverts.id DESC;
';
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
header('Content-Type: application/json; charset=UTF8');
echo json_encode($rows);