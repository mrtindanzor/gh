<div class="main-section">
  <?php
  $userId = $_SESSION['id'];
  $myProfileSection = $profileAccount.'<br>'
                  .$profileAdvert.'<br>'
                  .$profilePerformance.'<br>'
                  .$profileNotification.'<br>'
                  .$profileFeedback.'<br>';
  if(isset($_GET['section'])){
    if($_GET['section'] == 'myaccount') {
                                   $myProfileSection = $emailButton.'<br>'
                                                   .$phoneNumberButton.'<br>'
                                                   .$settingsButton.'<br>'
                                                   .$logoutButton.'<br>';
                                    }
  include 'adverts_section.php';
  include 'change_log_info.php';
                                    
    if($_GET['section'] == 'adperformance') {
                                   
                                    }
                                    
    if($_GET['section'] == 'notifications') {
                                  
                                    }
                                    
    if($_GET['section'] == 'feedback') {
                                   
                                    }

                                    
  } 
   if(isset($myProfileSection)) echo $myProfileSection; 
           
   ?>
</div>