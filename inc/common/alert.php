<?php
isset($_SESSION['message_header']) ? $alert_title = $_SESSION['message_header'] : '';
isset($_SESSION['message']) ? $alert_message = $_SESSION['message'] : '';

//Alert icons
$error = (new icons('alert-icon', 'warning'))->exclamation_down();
$success = (new icons('alert-icon', 'success'))->tick();
$info  = (new icons('alert-icon', 'Info'))->info();
$notification  = (new icons('alert-icon', 'notification'))->notification_bell();
$close = (new icons('alert-close', 'close'))->close_icon();

  if(isset($_SESSION['message_header'])){
    switch ($alert_title){
      case 'error':
          $state = '<div class="tick-cover error">'.$error.'</div>';
        break;
      case 'success':
        $state = '<div class="tick-cover success">'.$success.'</div>';
        break;
      case 'info':
        $state = '<div class="tick-cover info">'.$info.'</div>';
        break;
      case 'notification':
        $state = '<div class="tick-cover notification">'.$notification.'</div>';
        break;
    }
    $alert = '<div class="message-board">'.$state.'
          <div class="message-body">'.$alert_message.'</div>
        <div class="message-close">'.$close.'</div>
        <div class="progress"></div>
      </div>';
    echo $alert;
  unset( $_SESSION['message_header']);
  unset( $_SESSION['message']);
  }
