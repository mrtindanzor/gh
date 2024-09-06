<?php
$dsn='mysql:host=localhost;dbname=users';
$user = 'root';
$pass = 'Mrtindanzor';
try{
$conn = new PDO($dsn, $user, $pass);
}catch(Exception $e){
  echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $response = '';
  $upload_folder = 'uploads/';
  $allowed_extensions = ['jpg', 'jpeg', 'png'];
  $files = $_FILES['files'];
  $fileLength = count($files['name']);
  for($i = 0; $i < $fileLength; $i++){
    $filename = $files['name'][$i];
    $fileError = $files['error'][$i];
    $tmpFolder = $files['tmp_name'][$i];
    $getFileExtension = explode('.', $filename);
    $fileExtension = strtolower(end($getFileExtension));
    $newFileName = uniqid('', true).'.'.$fileExtension;
    $fileDestination = $upload_folder.$newFileName;
    if(!in_array($fileExtension, $allowed_extensions)){
      return $reponse = 'Only allowed files are jpg, jpeg and png.';
    }
    if($fileError != 0){
      return $response = 'An error occured while uploading your image.';
    }

    $sql = 'INSERT INTO ads (images) VALUES (:image)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':image', $fileDestination);
    $stmt->execute();

    if($stmt->rowCount() > 0){
      move_uploaded_file($tmpFolder, $fileDestination);
    }
  }

}
?>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="files[]" id="" multiple>
  <button type="submit">submit</button>
</form>


<?php
!empty($reponse) ? print $response : '';
//$sql = 'INSERT INTO adverts (title, price, decription, region_id, city_id, main_category_id, subcategory_id) VALUES(:title, :price, ;description, :region, :city, :main, :sub)';
//$sql = 'INSERT INTO adverts_images (advert_id, image) VALUES(:advert_id, :image)';