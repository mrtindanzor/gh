<?php

// class conn {
//   public $dbcon = 'mysql:host=localhost;dbname=users';
//   public $dbuser =  'root';
//   public $dbpass = 'Mrtindanzor';

//   public function pdo_connect(){
//     $dbcon = $this->dbcon;
//     $dbuser =  $this->dbuser;
//     $dbpass = $this->dbpass;
//     $conn = new PDO($dbcon, $dbuser, $dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $conn;
//   }
// }

$db = 'mysql:host=localhost;dbname=users';
$dbpass = 'Mrtindanzor';
$dbuser = 'root';

try{
  $conn = new PDO($db, $dbuser, $dbpass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  $_SESSION['message_header'] = 'error';
  $_SESSION['message'] = $e->getMessage();
}