<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'inc/config/config.php';
}
isset($_SESSION['id']) ? $username = $_SESSION['firstname'].' '.$_SESSION['surname'] : "";
