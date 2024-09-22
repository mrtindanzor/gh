<?php
$myAccountIcon = (new icons('profile-icon', 'My Account'))->user_pin_circle();
$profileAccount = (new profileList())->list($myAccountIcon, 'My Account', 'myaccount.php');

$myAdIcon = (new icons('profile-icon', 'Posted Ads'))->list();
$profileAdvert = (new profileList())->list($myAdIcon, 'My Adverts', 'myadverts.php');

$advertPreformanceIcon = (new icons('profile-icon', 'Performance'))->poll_chart();
$profilePerformance = (new profileList())->list($advertPreformanceIcon, 'Ad Performance', 'performance.php');

$notificationIcon = (new icons('profile-icon', 'Notification'))->notification_bell();
$profileNotification = (new profileList())->list($notificationIcon, 'Notifications', 'notifications.php');

$feedbackIcon = (new icons('profile-icon', 'Feedback'))->feedback_line();
$profileFeedback = (new profileList())->list($feedbackIcon, 'Feedback', 'feedback.php');

$logoutIcon = (new icons('profile-icon', 'Logout'))->logout();
$logoutButton = (new profileList())->account('a', 'profile-item', $logoutIcon, 'Logout');

$settingsIcon = (new icons('profile-icon', 'Settings'))->settings_gear();
$settingsButton =  (new profileList())->account('a', 'profile-item', $settingsIcon, 'Settings');

$emailIcon = (new icons('profile-icon', 'Email'))->envelope_line();
$emailButton =  (new profileList())->account('a', 'profile-item', $emailIcon, 'Change email');

$phoneIcon = (new icons('profile-icon', 'Phone number'))->phone_fill();
$phoneNumberButton =  (new profileList())->account('a', 'profile-item', $phoneIcon, 'Change phone number');