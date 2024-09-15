<?php
function account($element, $link, $classname, $icon, $title){
return '<'.$element.' '.$link.' class="'.$classname.'">
        '.$icon.'<span>'.$title.'
      </'.$element.'>';
}
$myAccountIcon = (new icons('profile-icon', 'My Account'))->user_pin_circle();
$profileAccount = (new profileList($myAccountIcon, 'My Account', 'myaccount.php'))->list();

$myAdIcon = (new icons('profile-icon', 'Posted Ads'))->list();
$profileAdvert = (new profileList($myAdIcon, 'My Adverts', 'myadverts.php'))->list();

$advertPreformanceIcon = (new icons('profile-icon', 'Performance'))->poll_chart();
$profilePerformance = (new profileList($advertPreformanceIcon, 'Ad Performance', 'performance.php'))->list();

$notificationIcon = (new icons('profile-icon', 'Notification'))->notification_bell();
$profileNotification = (new profileList($notificationIcon, 'Notifications', 'notifications.php'))->list();

$feedbackIcon = (new icons('profile-icon', 'Feedback'))->feedback_line();
$profileFeedback = (new profileList($feedbackIcon, 'Feedback', 'feedback.php'))->list();

$logoutIcon = (new icons('profile-icon', 'Logout'))->logout();
$logoutButton = account('a', 'href="../index.php?logout=true"', 'profile-item', $logoutIcon, 'Logout');

$settingsIcon = (new icons('profile-icon', 'Settings'))->settings_gear();
$settingsButton =  account('a', 'href="settings.php"', 'profile-item', $settingsIcon, 'Settings');

$emailIcon = (new icons('profile-icon', 'Email'))->envelope_line();
$emailButton =  account('a', 'href="email.php"', 'profile-item', $emailIcon, 'Change email');

$phoneIcon = (new icons('profile-icon', 'Phone number'))->phone_fill();
$phoneNumberButton =  account('a', 'href="email.php"', 'profile-item', $phoneIcon, 'Change phone number');