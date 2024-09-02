<script src="scripts/default.js" defer></script>
<?php
$homepage_script = '<script src="scripts/homepage.js" defer></script>';
$saved_ads_script = '<script src="scripts/saved_ads.js" defer></script>';
$post_ad_script = '<script src="scripts/post_ad.js" defer></script>';
$message_script = '<script src="scripts/message.js" defer></script>';
$profile_script = '<script src="scripts/profile.js" defer></script>';

isset($homepage_page) ? print $homepage_script :'';
isset($saved_page) ? print $saved_ads_script :'';
isset($message_page) ? print $message_script :'';
isset($post_ad_page) ? print $post_ad_script :'';
isset($profile_page) ? print $profile_script :'';