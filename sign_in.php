<?php
$title = 'Sign in ';
$sign_form_page = true;
$sign_in_page = true;
include 'inc/common/header.php';
?>
<div class="sign-block">
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signform signin" id="signform" method="post">
    <div class="choose-phone-or-email">
      <label for="email-radio" class="with-email radio">
        Email
        <input type="radio" name="choice" id="email-radio" class="radios" checked>
      </label>
      <label for="phone-radio" class="with-phone radio">
        <input type="radio" name="choice" class="radios" id="phone-radio">
        Mobile Number
      </label>
    </div>
    <div class="sign-form">
      <div class="labels">
        <label for="email" class="form-label">Email: </label>
        <label for="phone" class="form-label">Phone: </label>
        <label for="password" class="form-label">Password: </label>
      </div>
      <div class="inputs">
        <input type="email" name="email" id="email" class="email" placeholder="example@outlook.com*">
        <input type="tel" name="phone" id="phone" class="phone" placeholder="0244000000*">
        <input type="password" name="password" id="password" class="password" placeholder="min 8 characters*" required>
        <input type="submit" name="submit" id="submit" class="submit" value="Login">
      </div>
    </div>
  </form>
  <a href="sign_up.php" class="sign-form-option">
    Or Sign up
  </a>
</div>