<?php

if($_GET['section'] == 'changeemail') {
  if(isset($_POST['submit'])){
    $conn = (new conn())->connect();      
    $email = $_POST['email'];
    $changeEmail = (new updateInfo())->verify('email', $email, $conn, $userId, '0');

  }
  $myProfileSection = '';
  echo '<form action="" method="post" class="update">
        <input name="email" type="email" class="email-input" placeholder="example@email.com" required>
        <button  name="submit" class="submit-btn">change email</button>
        <span class="response">';
        if(!empty($_SESSION['response'])) echo $_SESSION['response']
        .'</span>
        </form>';
        unset($_SESSION['response']);
                                }

if($_GET['section'] == 'changephonenumber') {
  if(isset($_POST['submit'])){
    $conn = (new conn())->connect();      
    $phone = $_POST['phone'];
    $changePhone = new updateInfo();
    $changePhone->verify('phone', $phone, $conn, $userId, '1');
  }
  $myProfileSection = '';
  echo '<form action="" method="post" class="update">
          <input name="phone" type="tel" class="phone-input" placeholder="0200000000" required>
          <button  name="submit" class="submit-btn">change phone number</button>
        <span class="response">';
        if(!empty($_SESSION['response'])) echo $_SESSION['response']
        .'</span>
        </form>';
        unset($_SESSION['response']);
                                }