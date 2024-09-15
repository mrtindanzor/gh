<?php
include '../inc/common/session_start.php';
include '../classes/profile_list_class.php';
include '../classes/icons_class.php';
include 'list_script.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/myaccount.css">
  <link rel="stylesheet" href="../styles/default.css">
  <title>My Account</title>
</head>

<body>
  <div class="main-section">
    <?php
echo $emailButton.'<br>'
    .$phoneNumberButton.'<br>'
    .$settingsButton.'<br>'
    .$logoutButton.'<br>'
?>
  </div>
</body>

</html>