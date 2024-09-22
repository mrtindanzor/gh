<?php
$title = 'My Profile';

if(isset($_GET['section'])){
  if($_GET['section'] == 'myaccount')  $title = 'My Account'; 
  if($_GET['section'] == 'myadverts')  $title = 'My Adverts';   
  // if($_GET['section'] == 'adperformance')  $title = 'Ad Performance';             
  // if($_GET['section'] == 'notifications')  $title = 'Notifications';   
  if($_GET['section'] == 'changeemail')  $title = 'Change Email';                       
  if($_GET['section'] == 'changephonenumber')  $title = 'Change Phone Number';                       
}