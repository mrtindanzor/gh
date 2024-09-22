<link rel="stylesheet" href="styles/default.css">

<?php
require 'classes/icons_class.php';
isset($_SESSION['id']) ? (
                          ($saved_ads_link = 'saved_ads.php').
                          ($post_ad_link = 'post_ad.php').
                          ($message_link = 'message.php').
                          ($profile_link = 'profile.php?section=myprofile')
):(
                          ($saved_ads_link = 'sign_in.php').
                          ($message_link = 'sign_in.php').
                          ($profile_link = 'sign_in.php').
                          ($post_ad_link = 'sign_in.php')
);


$homepage_css = '<link rel="stylesheet" href="styles/homepage.css">';
$saved_ad_css = '<link rel="stylesheet" href="styles/saved_ads.css">';
$message_css = '<link rel="stylesheet" href="styles/message.css">';
$post_ad_css = '<link rel="stylesheet" href="styles/post_ad.css">';
$profile_css = '<link rel="stylesheet" href="styles/profile.css">';
$sign_form_css = '<link rel="stylesheet" href="styles/sign_form.css">';

isset($homepage_page) ? print $homepage_css :'';
isset($saved_ads_page) ? print $saved_ad_css :'';
isset($message_page) ? print $message_css :'';
isset($post_ad_page) ? print $post_ad_css :'';
isset($profile_page) ? (print $profile_css).(require 'classes/update_info_class.php') :'';
isset($sign_form_page) ? print $sign_form_css :'';

#login and sign up
$log_auth = '<div class="auth">
<a href="sign_in.php" class="sign-in-button">Log in</a>
<a href="sign_up.php" class="sign-up-button">Sign up</a>
  </div>';


if(isset($sign_up_page)){
  $log_auth = '<div class="auth">
<a href="sign_in.php" class="sign-in-button">Sign in</a>
  </div>';
}

if(isset($sign_in_page)){
  $log_auth = '<div class="auth">
<a href="sign_up.php" class="sign-up-button">Sign up</a>
  </div>';
}


# navigation svgs
$backbutton  = (new icons('nav-item back-button-icon', 'Go back'))->back_icon();
$homebutton = (new icons('nav-item', 'Home page'))->home_icon();
$savedbutton = (new icons('nav-item', 'Saved Ads'))->bookmark_star_icon();
$postbutton = (new icons('nav-item', 'Post Ad'))->square_plus_icon();
$messagebutton = (new icons('nav-item', 'Messages'))->chat_lines();
$profilebutton = (new icons('nav-item', 'My Profile'))->user_small();
$usericon= (new icons('nav-item', 'My Profile'))->user_huge();