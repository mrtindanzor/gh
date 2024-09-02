<?php

include 'categories/config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = trim($_POST['password']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  try{
  $login = new login($email, $phone, $password);
  $login->conn = $conn;
  $login->checkPhoneEmail();
  $login->checkUser();
  $login->checkResult();
  }catch(Exception $e){
    $_SESSION['message'] = $e->getMessage();
    header('Location: '.htmlspecialchars($_SERVER['PHP_SELF']).'');
    exit();
  }


}
