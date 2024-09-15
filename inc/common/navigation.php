<div class="nav-bar">
  <?php
    (!isset($homepage_page)) ? print '<div class="back-button" onclick="history.back()">'.$backbutton.'</div>' :'';
    (!isset($_SESSION['id'])) ? print $login : '';
  ?>
  <div class="nav-links <?php isset($_SESSION['id']) ? '' : print 'not-logged-in'; ?>">
    <div class="nav-link homepage">
      <a href="index.php" title="Homepage">
        <?php echo $homebutton; ?>
      </a>
    </div>

    <div class="nav-link saved-ads <?php isset($saved_ads_page) ?  print 'active-page' : ''; ?>">
      <a href="<?php echo  $saved_ads_link; ?>" title="Saved Ads">
        <?php  echo $savedbutton; ?>
      </a>
    </div>

    <div class="nav-link post-ad <?php isset($post_ad_page) ?  print 'active-page' : ''; ?>">
      <a href="<?php echo $post_ad_link ?>" title="Post Ad">
        <?php echo  $postbutton; ?>
      </a>
    </div>

    <div class="nav-link messages <?php isset($message_page) ?  print 'active-page' : ''; ?>">
      <a href="<?php  echo $message_link; ?>" title="Messages">
        <?php  echo $messagebutton; ?>
      </a>
    </div>

    <div class="nav-link profile <?php isset($profile_page) ?  print 'active-page' : ''; ?>">
      <a href="<?php echo  $profile_link; ?>" title="My Profile">
        <?php  echo $profilebutton; ?>
      </a>
    </div>
  </div>
</div>