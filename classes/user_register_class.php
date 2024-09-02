<?php

class newRegistration extends users{

  public function __construct($firstname, $surname, $email, $phone, $password, $password_repeat){
    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->password = $password;
    $this->email = $email;
    $this->phone = $phone;
    $this->password_confirmation = $password_repeat;
  }

  public function checkErrors() {
    $firstname = $this->firstname;
    $surname = $this->surname;
    $password = $this->password;
    $alpha_numeric_pattern = $this->alpha_numeric_pattern;
    $password_repeat = $this->password_confirmation;
    if(!preg_match($alpha_numeric_pattern, $firstname) || strlen($firstname)  < 3){
      $_SESSION['message_header'] = 'info';
      throw new Exception('First name can only have letters or numbers, min length 3 chars');
    }
    if(!empty($surname) && (!preg_match($alpha_numeric_pattern, $surname) || strlen($surname)  < 3)){
      $_SESSION['message_header'] = 'info';
      throw new Exception('Surname can only have letters or numbers, min length 3 chars');
    }
    $this->checkPhoneEmail();
    if(empty($password)){
      $_SESSION['message_header'] = 'info';
      throw new Exception('no password provided');
    }
    if(strlen($password) < 5){
      $_SESSION['message_header'] = 'info';
      throw new Exception('Password too short, min length 8 characters');
    }
    if(strlen($password) < 8){
      $_SESSION['message_header'] = 'info';
      throw new Exception('Password short, min length 8 characters');
    }
    if($password != $password_repeat){
      $_SESSION['message_header'] = 'info';
      throw new Exception('Passwords do not match');
    }
  }
  public function checkResult(){
    $status = $this->status;
    if($status == 1){
      $_SESSION['message_header'] = 'info';
      throw new Exception('A user this email already exists');
    }
    if($status == 2 ){
      $_SESSION['message_header'] = 'info';
      throw new Exception('A user this number already exists');

    }
  }


  public function createUser(){
    $conn = $this->conn;
    $firstname = $this->firstname;
    $surname = empty($this->surname) ? '' : $this->surname;
    $email =  empty($this->email) ? '' : $this->email;
    $phone = empty($this->phone) ? '' : $this->phone;
    $password_hash = password_hash($this->password, PASSWORD_DEFAULT);

    $query = 'INSERT INTO users (firstname, email, password, surname, phone) VALUES (:firstname, :email, :password, :surname, :phone)';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':firstname' ,$firstname );
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password_hash);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    if($stmt->rowCount() > 0){
      $_SESSION['message_header'] = 'success';
      $_SESSION['message'] = 'Account created successfully, please login';
      header('Location: sign_in.php');
      exit();
    }else{
      $_SESSION['message_header'] = 'error';
      throw new Exception('Something went wrong. Try again');
    }

  }
}