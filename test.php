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
  $filename = $_FILES['files']['name'];
  $number_of_images = count($filename);
  $temp_folder = $_FILES['files']['tmp_name'];
  $upload_folder = 'ad_images/';
  $name_folder_array = array_combine($filename, $temp_folder);
  foreach($name_folder_array as $name => $folder){
    $sql = 'INSERT INTO ads (name, images) VALUES (:name, :folder)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':folder', $folder);
    $stmt->execute();

    if($stmt->rowCount() > 0){
      move_uploaded_file($folder, $upload_folder);
    }

    
  }
}
?>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="files[]" id="" multiple>
  <button type="submit">submit</button>
</form>