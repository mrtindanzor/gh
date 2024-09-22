<?php

class conn {
  public $dbcon = 'mysql:host=localhost;dbname=users';
  public $dbuser =  'root';
  public $dbpass = 'Mrtindanzor';

  public function connect(){
    $dbcon = $this->dbcon;
    $dbuser =  $this->dbuser;
    $dbpass = $this->dbpass;

    try{
      $conn = new PDO($dbcon, $dbuser, $dbpass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e){
      $_SESSION['message_header'] = 'error';
      $_SESSION['message'] = $e->getMessage();
    }
  }
}

$conn = (new conn())->connect();