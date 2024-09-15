<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '../inc/config/config.php';
  $userId = $_SESSION['id'];
  $adTitle = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $mainCategoryId = $_POST['maincatId'];
  $subCategoryId = $_POST['subcatId'];
  $regionId = $_POST['region-id'];
  $cityId = $_POST['city-id'];
  $files = $_FILES['images'];
  $filesLength = count($files['name']);
  $allowedImageExtensions = ['jpg', 'jpeg', 'png'];
  $allowedFileSize = 2048000;
  $uploadFolder = 'uploads/';
  
  if(empty($adTitle)) header('Location: ../post_ad.php?titleEmpty').exit();
  if(empty($description)) header('Location: ../post_ad.php?descriptionEmpty').exit();
  if(empty($price)) header('Location: ../post_ad.php?priceEmpty').exit();
  if(empty($mainCategoryId)) header('Location: ../post_ad.php?mainCategoryEmpty').exit();
  if(empty($subCategoryId)) header('Location: ../post_ad.php?subcategoryEmpty').exit();
  if(empty($regionId)) header('Location: ../post_ad.php?regionIdEmpty').exit();
  if(empty($cityId)) header('Location: ../post_ad.php?cityIdEmpty').exit();
  if($files['name'][0] == '') header('Location: ../post_ad.php?imageFieldEmpty').exit();

  for($i = 0; $i < $filesLength; $i++){
    $fileName = $files['name'][$i];
    $fileError = $files['error'][$i];
    $fileSize = $files['size'][$i];
    $getFileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($getFileExtension));
    if($fileError !== 0){
     header('Location: ../post_ad.php?imageUploadError').exit();
    }
    if(!in_array($fileExtension, $allowedImageExtensions)){
     header('Location: ../post_ad.php?imageExtensionNotAllowed').exit();
    }
    if($fileSize > $allowedFileSize){
     header('Location: ../post_ad.php?largeImageSize').exit();
    }
  }

  $sql = 'INSERT INTO adverts(userId, title, price, description, mainCategoryId, subCategoryId, regionId, cityId) VALUES (:userId, :title, :price, :description, :mainCategoryId, :subCategoryId, :regionId, :cityId)';
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':userId', $userId);
  $stmt->bindParam(':title', $adTitle);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':mainCategoryId', $mainCategoryId);
  $stmt->bindParam(':subCategoryId', $subCategoryId);
  $stmt->bindParam(':regionId', $regionId);
  $stmt->bindParam(':cityId', $cityId);
  $stmt->execute();
  $advertId = $conn->lastInsertId();

  if($stmt->rowCount() > 0 ){
    for($i = 0; $i < $filesLength; $i++){
      $fileName = $files['name'][$i];
      $tmpFolder = $files['tmp_name'][$i];
      $getFileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($getFileExtension));
      $newFileName = uniqid('', true).'.'.$fileExtension;
      $destination = $uploadFolder.$newFileName;
      
      $sql = 'INSERT INTO adverts_images VALUES (:userId, :advertId, :images)';
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':userId', $userId);
      $stmt->bindParam(':advertId', $advertId);
      $stmt->bindParam(':images', $destination);
      $stmt->execute();

      if($stmt->rowCount() > 0){
        move_uploaded_file($tmpFolder, '../'.$destination);
      }
    }
  }
  header('Location: ../post_ad.php?success');
  exit();
}