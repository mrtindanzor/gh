<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $response = '';
  $userId = $_SESSION['id'];
  $title = $_POST['title'];
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
  
  if(empty($title)) return $response = 'You must add a title.';
  if(empty($description)) return $response = 'You must add a description';
  if(empty($price)) return $response = 'You must add the price';
  if(empty($mainCategoryId)) return $response = 'Choose a category';
  if(empty($subCategoryId)) return $response = 'Select a subcategory';
  if(empty($regionId)) return $response = 'Please set a region for the item';
  if(empty($cityId)) return $response = 'Please set a city for the item';
  if($files['name'][0] == '') return $response = 'Please add some images to your ad';

  for($i = 0; $i < $filesLength; $i++){
    $fileName = $files['name'][$i];
    $fileError = $files['error'][$i];
    $fileSize = $files['size'][$i];
    $getFileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($getFileExtension));
    if($fileError !== 0){
      return $response = 'An error occured while uploading images';
    }
    if(!in_array($fileExtension, $allowedImageExtensions)){
      return $response = 'Allowed images are jpg, jpeg and png only.';
    }
    if($fileSize > $allowedFileSize){
      return $response = 'Image size should be at most 2MB';
    }
  }

  $sql = 'INSERT INTO adverts(userId, title, price, description, mainCategoryId, subCategoryId, regionId, cityId) VALUES (:userId, :title, :price, :description, :mainCategoryId, :subCategoryId, :regionId, :cityId)';
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':userId', $userId);
  $stmt->bindParam(':title', $title);
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
        move_uploaded_file($tmpFolder, $destination);
        header('Location: '.$_SERVER["PHP_SELF"].'?success');
      }
    }
  }

}