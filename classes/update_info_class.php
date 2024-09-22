<?php
class updateInfo {
  public $email_pattern = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z]{2,}$/';
  public $numeric_pattern = '/[0-9]/';
  public function verify($info, $cred, $conn, $userId, $type){
    if($type == 1){
      if(!preg_match($this->numeric_pattern, $cred)) {
        $_SESSION['response'] = 'Invalid Phone format';
      }
    }
    if($type == 0){
      if(!preg_match($this->email_pattern, $cred)) {
       $_SESSION['response'] = 'Invalid Email format';
      }
    }
        $sql = "SELECT * FROM `users` WHERE `$info` = :$info";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$info", $cred);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        if($stmt->rowCount() > 0 ){
          if($row->id == $userId) return $_SESSION['response'] = 'You are already using this '.$info.'';
           $_SESSION['response'] = 'A user with this '.$info.' already exists';
        } else {
        $this->insert($info, $cred, $conn, $userId);
        
        }
  }
  public function insert($info, $cred, $conn, $userId){
          $sql = "UPDATE users SET `$info` = :$info WHERE `id` = :userId";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(":$info", $cred);
          $stmt->bindParam(':userId', $userId);
          $stmt->execute();
      if($stmt->rowCount() > 0 ){
       $_SESSION['response'] = 'Updated successfully';
      } else {
       $_SESSION['response'] = 'An error occured';
      }
}
}