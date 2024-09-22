<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'inc/config/config.php';
}
if(isset($_GET['login'])) {
  $_SESSION['message_header'] = 'info';
  $_SESSION['message'] = 'Login to continue';
}
isset($_SESSION['id']) ? $username = $_SESSION['firstname'].' '.$_SESSION['surname'] : "";