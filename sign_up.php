<?php
$title = 'Register ';
$sign_form_page = true;
$sign_up_page = true;
include 'inc/common/header.php';

?>
<div class="sign-block">
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup signform" id="signform" method="post"
    autocomplete="off">
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
        <label for="firstname" class="form-label">First name: </label>
        <label for="email" class="form-label">Email: </label>
        <label for="phone" class="form-label">Phone: </label>
        <label for="password" class="form-label">Password: </label>
        <label for="password-repeat" class="form-label">Confirm password: </label>
        <label for="surname" class="form-label">Surname: </label>
      </div>
      <div class="inputs">
        <input type="text" name="firstname" id="firstname" class="firstname" placeholder="Alex, John, ...*" required>
        <input type="email" name="email" id="email" class="email" autocomplete="off" placeholder="example@outlook.com*">
        <input type="tel" name="phone" id="phone" class="phone" placeholder="0244000000*">
        <input type="password" name="password" id="password" class="password" placeholder="min 8 characters*" required>
        <input type="password" name="password_repeat" id="password-repeat" class="password-repeat*"
          placeholder="repeat password" required>
        <input type="text" name="surname" id="surname" class="surname" placeholder="Surname (Optional)">
        <input type="submit" name="submit" id="submit" class="submit" value="Register">
      </div>
    </div>
  </form>
  <a href="sign_in.php" class="sign-form-option">
    Or Sign in
  </a>
</div>