<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = trim($_POST['password']);
  $password_repeat = trim($_POST['password_repeat']);
  $firstname = trim($_POST['firstname']);
  $surname = trim($_POST['surname']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  try{
  $register = new newRegistration($firstname, $surname ,$email, $phone, $password, $password_repeat);
  $register->conn = $conn;
  $register->checkErrors();
  $register->checkUser();
  $register->createUser();
  }catch(Exception $e){
    $_SESSION['message'] = $e->getMessage();
    header('Location: '.htmlspecialchars($_SERVER['PHP_SELF']).'');
    exit();
  }


}
