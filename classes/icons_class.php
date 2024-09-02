<?php
class icons{
protected $classname;
protected $title;
public function __construct($classname, $title){
$this->classname = $classname;
$this->title = $title;
}

public function toggle_left(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="toggle-left">
      <g id="toggle-left-2" data-name="toggle-left">
        <rect class="cls-1" width="24" height="24" transform="translate(24 24) rotate(180)" />
        <path class="cls-2" d="M15,5H9A7,7,0,0,0,9,19h6A7,7,0,0,0,15,5Zm0,12H9A5,5,0,0,1,9,7h6a5,5,0,0,1,0,10Z" />
        <path class="cls-2" d="M9,9a3,3,0,1,0,3,3A3,3,0,0,0,9,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,9,13Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function close_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="close">
      <g id="close-2" data-name="close">
        <rect class="cls-1" width="24" height="24" transform="translate(24 24) rotate(180)" />
        <path class="cls-2"
          d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
      </g>
    </g>
  </g>
</svg>';
}
public function fill_down_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="arrow-downward">
      <g id="arrow-downward-2" data-name="arrow-downward">
        <rect class="cls-1" width="24" height="24" transform="translate(0 24) rotate(-90)" />
        <path class="cls-2"
          d="M12,17a1.72,1.72,0,0,1-1.33-.64l-4.21-5.1A2.1,2.1,0,0,1,6.2,9.05,1.76,1.76,0,0,1,7.79,8h8.42A1.76,1.76,0,0,1,17.8,9.05a2.1,2.1,0,0,1-.26,2.21l-4.21,5.1A1.72,1.72,0,0,1,12,17Z" />
      </g>
    </g>
  </g>
</svg>';
}
public function thin_down_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
   <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="arrow-down">
      <g id="arrow-down-2" data-name="arrow-down">
        <rect class="cls-1" width="24" height="24" transform="translate(0 24) rotate(-90)" />
        <path class="cls-2"
          d="M12,17a1.72,1.72,0,0,1-1.33-.64l-4.21-5.1A2.1,2.1,0,0,1,6.2,9.05,1.76,1.76,0,0,1,7.79,8h8.42A1.76,1.76,0,0,1,17.8,9.05a2.1,2.1,0,0,1-.26,2.21l-4.21,5.1A1.72,1.72,0,0,1,12,17ZM8.09,10,12,14.82,16,10Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function tick(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="checkmark-circle-2">
      <g id="checkmark-circle-2-2" data-name="checkmark-circle-2">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
        <path class="cls-2"
          d="M14.7,8.39l-3.78,5L9.29,11.28a1,1,0,0,0-1.58,1.23l2.43,3.11a1,1,0,0,0,.79.38h0a1,1,0,0,0,.79-.39l4.57-6a1,1,0,1,0-1.6-1.22Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function notification_bell(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" class="'.$classname.'" xmlns="http://www.w3.org/2000/svg">
  <title>'.$title.'</title>
  <path
    d="M22 20H2V18H3V11.0314C3 6.04348 7.02944 2 12 2C16.9706 2 21 6.04348 21 11.0314V18H22V20ZM5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z" />
</svg>';
}

public function exclamation_down(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="alert-circle">
      <g id="alert-circle-2" data-name="alert-circle">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
        <circle class="cls-2" cx="12" cy="16" r="1" />
        <path class="cls-2" d="M12,7a1,1,0,0,0-1,1v5a1,1,0,0,0,2,0V8A1,1,0,0,0,12,7Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function info(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="'.$classname.'" viewBox="0 0 24 24">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="info">
      <g id="info-2" data-name="info">
        <rect class="cls-1" width="24" height="24" transform="translate(24 24) rotate(180)" />
        <path class="cls-2" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
        <circle class="cls-2" cx="12" cy="8" r="1" />
        <path class="cls-2" d="M12,10a1,1,0,0,0-1,1v5a1,1,0,0,0,2,0V11A1,1,0,0,0,12,10Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function toggle_right(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="'.$classname.'">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="toggle-right">
      <g id="toggle-right-2" data-name="toggle-right">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2" d="M15,5H9A7,7,0,0,0,9,19h6A7,7,0,0,0,15,5Zm0,12H9A5,5,0,0,1,9,7h6a5,5,0,0,1,0,10Z" />
        <path class="cls-2" d="M15,9a3,3,0,1,0,3,3A3,3,0,0,0,15,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,15,13Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function back_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="'.$classname.'" fill="currentColor">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="arrow-ios-back">
      <g id="arrow-ios-back-2" data-name="arrow-ios-back">
        <rect class="cls-1" width="24" height="24" transform="translate(24 0) rotate(90)" />
        <path class="cls-2"
          d="M13.83,19a1,1,0,0,1-.78-.37l-4.83-6a1,1,0,0,1,0-1.27l5-6a1,1,0,0,1,1.54,1.28L10.29,12l4.32,5.36A1,1,0,0,1,13.83,19Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function home_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" class="'.$classname.'" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <title>'.$title.'</title>
  <path
    d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM13 19H18V9.15745L12 3.7029L6 9.15745V19H11V13H13V19Z" />
</svg>';
}


public function bookmark_star_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" class="'.$classname.'" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <title>'.$title.'</title>
  <path
    d="M4 2H20C20.5523 2 21 2.44772 21 3V22.2763C21 22.5525 20.7761 22.7764 20.5 22.7764C20.4298 22.7764 20.3604 22.7615 20.2963 22.7329L12 19.0313L3.70373 22.7329C3.45155 22.8455 3.15591 22.7322 3.04339 22.4801C3.01478 22.4159 3 22.3465 3 22.2763V3C3 2.44772 3.44772 2 4 2ZM19 19.9645V4H5V19.9645L12 16.8412L19 19.9645ZM12 13.5L9.06107 15.0451L9.62236 11.7725L7.24472 9.45492L10.5305 8.97746L12 6L13.4695 8.97746L16.7553 9.45492L14.3776 11.7725L14.9389 15.0451L12 13.5Z" />
</svg>';
}


public function square_plus_icon(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" class="'.$classname.'" fill="currentColor" viewBox="0 0 24 24">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="plus-square">
      <g id="plus-square-2" data-name="plus-square">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2"
          d="M18,3H6A3,3,0,0,0,3,6V18a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V6A3,3,0,0,0,18,3ZM15,13H13v2a1,1,0,0,1-2,0V13H9a1,1,0,0,1,0-2h2V9a1,1,0,0,1,2,0v2h2a1,1,0,0,1,0,2Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function chat_lines(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="'.$classname.'" fill="currentColor">
  <defs>
    <style>
    .cls-1 {
      fill: none;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="message-square">
      <g id="message-square-2" data-name="message-square">
        <rect class="cls-1" width="24" height="24" />
        <circle class="cls-2" cx="12" cy="11" r="1" />
        <circle class="cls-2" cx="16" cy="11" r="1" />
        <circle class="cls-2" cx="8" cy="11" r="1" />
        <path class="cls-2"
          d="M19,3H5A3,3,0,0,0,2,6V21a1,1,0,0,0,.51.87A1,1,0,0,0,3,22a1,1,0,0,0,.51-.14L8,19.14A1,1,0,0,1,8.55,19H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Zm1,13a1,1,0,0,1-1,1H8.55A3,3,0,0,0,7,17.43l-3,1.8V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function user_small(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="'.$classname.'" fill="currentColor">
  <defs>
    <style>
    .cls-1 {
      fill: #fff;
      opacity: 0;
    }
    </style>
  </defs>
  <title>'.$title.'</title>
  <g id="Layer_2" data-name="Layer 2">
    <g id="person">
      <g id="person-2" data-name="person">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2" d="M12,11A4,4,0,1,0,8,7,4,4,0,0,0,12,11Zm0-6a2,2,0,1,1-2,2A2,2,0,0,1,12,5Z" />
        <path class="cls-2" d="M12,13a7,7,0,0,0-7,7,1,1,0,0,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0A7,7,0,0,0,12,13Z" />
      </g>
    </g>
  </g>
</svg>';
}


public function user_huge(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" class="'.$classname.'" xmlns="http://www.w3.org/2000/svg">
  <title>'.$title.'</title>
  <path
    d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z" />
</svg>';
}
}
