<?php
include 'session_start.php';
include 'classes/users_class.php';
isset($sign_up_page) ? (include 'classes/user_register_class.php').(include 'inc/authentication/sign_up_script.php') : '';
isset($sign_in_page) ? (include 'classes/user_login_class.php').(include 'inc/authentication/sign_in_script.php') : '';
// if logout isset do logout
isset($_SESSION['id']) && isset($_GET['logout'])  && ($_GET['logout'] == 'true') ? ($user = new users()).($user->logout()) : '';
isset($_SESSION['id']) && (isset($sign_up_page) || isset($sign_in_page)) ?
      ($_SESSION['message_header'] = 'info').
      ($_SESSION['message'] = 'You are already logged in <span class="username">'.$username.'</span>').
      (header("Location: index.php")).(exit()) : '';

!isset($_SESSION['id']) && (isset($saved_ads_page) || isset($post_ad_page) || isset($message_page) || isset($profile_page)) ?
      ($_SESSION['message_header'] = 'info').
      ($_SESSION['message'] = 'You need to login to access this page').
      (header("Location: index.php")).(exit()) : '';