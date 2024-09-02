<?php
class users{
  public $conn, $firstname, $surname, $email, $password,
        $password_confirmation, $phone,
        $email_pattern = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z]{2,}$/',
        $alpha_numeric_pattern = '/^[a-zA-Z0-9_]+$/', $numeric_pattern = '/[0-9]/',
        $alpha_pattern = '/[a-zA-Z]/',$status;

public function checkPhoneEmail(){

  $email = $this->email;
  $phone = $this->phone;
  $email_pattern = $this->email_pattern;
  $numeric_pattern = $this->numeric_pattern;
  if(!empty($email) && !preg_match($email_pattern, $email)){
    $_SESSION['message_header'] = 'info';
    throw new Exception('Invalid email format');
  }
  if (!empty($phone) && !preg_match($numeric_pattern, $phone)){
    $_SESSION['message_header'] = 'info';
    throw new Exception('Invalid phone format');
  }
  if (!empty($phone) && strlen($phone) < 9){
    $_SESSION['message_header'] = 'info';
    throw new Exception('Phone number too short');
  }
  if (!empty($phone) && strlen($phone) > 10){
    $_SESSION['message_header'] = 'info';
    throw new Exception('Phone number too long');
  }
  if(empty($phone) && empty($email)){
    $_SESSION['message_header'] = 'info';
    throw new Exception('Provide phone or email');
  }
}

public function checkUser(){
  $conn = $this->conn;
  $email = $this->email;
  $phone = $this->phone;

  if(!empty($email)){
  $query = "SELECT * FROM users WHERE email = :email";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();
  $stmt->fetch();
  if($stmt->rowCount() > 0){
    //status code for email found
    $this->status = 1;
  }else{
    //status code for email not found
    $this->status = 3;
  }

  }
  if(!empty($phone)){
    $query = "SELECT * FROM users WHERE phone = :phone ";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':phone', $phone);
  $stmt->execute();
  $stmt->fetch();
  if($stmt->rowCount() > 0){
    // status code for phone number found
    $this->status = 2;
  }else{
    //status code for phone number not found
    $this->status = 4;
  }
  }
}

public function logout(){
  $name = $_SESSION['firstname'].' '.$_SESSION['surname'];
  unset($_SESSION['id']);
  unset($_SESSION['firstname']);
  unset($_SESSION['surname']);
  unset($_SESSION['phone']);
  unset($_SESSION['email']);
      $_SESSION['message_header'] = 'success';
      $_SESSION['message'] = 'Signed out successfully <span class="username">'.$name.'</span>';
      header('Location: index.php');
      exit();
}

}