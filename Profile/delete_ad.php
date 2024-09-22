<?php
include '../inc/config/config.php';
$advertId = $_GET['id'];
$sql = 'DELETE adverts, adverts_images FROM adverts INNER JOIN adverts_images WHERE adverts.id = adverts_images.advertId AND adverts.id = :advertId';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":advertId", $advertId);
$stmt->execute();