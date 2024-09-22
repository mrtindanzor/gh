<?php
class icons{
protected $classname;
protected $title;
public function __construct($classname, $title){
$this->classname = $classname;
$this->title = $title;
}

public function feedback_line(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
<title>'.$title.'</title>
  <path
    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM4 18.3851L5.76282 17H20V5H4V18.3851ZM11 13H13V15H11V13ZM11 7H13V12H11V7Z" />
</svg>';
}

public function phone_fill(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"  class="'.$classname.'">
  <title>'.$title.'</title>
  <path
    d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z" />
</svg>';
}

public function plus_circle(){
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
    <g id="plus-circle">
      <g id="plus-circle-2" data-name="plus-circle">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
        <path class="cls-2" d="M15,11H13V9a1,1,0,0,0-2,0v2H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z" />
      </g>
    </g>
  </g>
</svg>';
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

public function envelope_line(){
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
    <g id="email">
      <g id="email-2" data-name="email">
        <rect class="cls-1" width="24" height="24" />
        <path class="cls-2"
          d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,.6.2,1,1,0,0,0,.6-.2L20,7.25V17A1,1,0,0,1,19,18Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function user_pin_circle(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
<title>'.$title.'</title>
  <path
    d="M9.74462 21.7446C5.30798 20.7219 2 16.7473 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 16.7473 18.692 20.7219 14.2554 21.7446L12 24L9.74462 21.7446ZM7.01173 18.2567C7.92447 18.986 9.00433 19.5215 10.1939 19.7957L10.7531 19.9246L12 21.1716L13.2469 19.9246L13.8061 19.7957C15.0745 19.5033 16.2183 18.9139 17.1676 18.1091C15.8965 16.8078 14.1225 16 12.1597 16C10.1238 16 8.29083 16.8692 7.01173 18.2567ZM5.61562 16.8214C7.25644 15.0841 9.58146 14 12.1597 14C14.644 14 16.8931 15.0065 18.5216 16.634C19.4563 15.3185 20 13.7141 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 13.7964 4.59708 15.4722 5.61562 16.8214ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13ZM12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11Z" />
</svg>';
}

public function  settings_gear(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
  <title>'.$title.'</title>
  <path
    d="M2.21232 14.0601C1.91928 12.6755 1.93115 11.2743 2.21316 9.94038C3.32308 10.0711 4.29187 9.7035 4.60865 8.93871C4.92544 8.17392 4.50032 7.22896 3.62307 6.53655C4.3669 5.3939 5.34931 4.39471 6.53554 3.62289C7.228 4.50059 8.17324 4.92601 8.93822 4.60914C9.7032 4.29227 10.0708 3.32308 9.93979 2.21281C11.3243 1.91977 12.7255 1.93164 14.0595 2.21364C13.9288 3.32356 14.2964 4.29235 15.0612 4.60914C15.8259 4.92593 16.7709 4.5008 17.4633 3.62356C18.606 4.36739 19.6052 5.3498 20.377 6.53602C19.4993 7.22849 19.0739 8.17373 19.3907 8.93871C19.7076 9.70369 20.6768 10.0713 21.7871 9.94028C22.0801 11.3248 22.0682 12.726 21.7862 14.06C20.6763 13.9293 19.7075 14.2969 19.3907 15.0616C19.0739 15.8264 19.4991 16.7714 20.3763 17.4638C19.6325 18.6064 18.6501 19.6056 17.4638 20.3775C16.7714 19.4998 15.8261 19.0743 15.0612 19.3912C14.2962 19.7081 13.9286 20.6773 14.0596 21.7875C12.675 22.0806 11.2738 22.0687 9.93989 21.7867C10.0706 20.6768 9.70301 19.708 8.93822 19.3912C8.17343 19.0744 7.22848 19.4995 6.53606 20.3768C5.39341 19.633 4.39422 18.6506 3.62241 17.4643C4.5001 16.7719 4.92552 15.8266 4.60865 15.0616C4.29179 14.2967 3.32259 13.9291 2.21232 14.0601ZM3.99975 12.2104C5.09956 12.5148 6.00718 13.2117 6.45641 14.2963C6.90564 15.3808 6.75667 16.5154 6.19421 17.5083C6.29077 17.61 6.38998 17.7092 6.49173 17.8056C7.4846 17.2432 8.61912 17.0943 9.70359 17.5435C10.7881 17.9927 11.485 18.9002 11.7894 19.9999C11.9295 20.0037 12.0697 20.0038 12.2099 20.0001C12.5143 18.9003 13.2112 17.9927 14.2958 17.5435C15.3803 17.0942 16.5149 17.2432 17.5078 17.8057C17.6096 17.7091 17.7087 17.6099 17.8051 17.5081C17.2427 16.5153 17.0938 15.3807 17.543 14.2963C17.9922 13.2118 18.8997 12.5149 19.9994 12.2105C20.0032 12.0704 20.0033 11.9301 19.9996 11.7899C18.8998 11.4856 17.9922 10.7886 17.543 9.70407C17.0937 8.61953 17.2427 7.48494 17.8052 6.49204C17.7086 6.39031 17.6094 6.2912 17.5076 6.19479C16.5148 6.75717 15.3803 6.9061 14.2958 6.4569C13.2113 6.0077 12.5144 5.10016 12.21 4.00044C12.0699 3.99666 11.9297 3.99659 11.7894 4.00024C11.4851 5.10005 10.7881 6.00767 9.70359 6.4569C8.61904 6.90613 7.48446 6.75715 6.49155 6.1947C6.38982 6.29126 6.29071 6.39047 6.19431 6.49222C6.75668 7.48509 6.90561 8.61961 6.45641 9.70407C6.00721 10.7885 5.09967 11.4855 3.99995 11.7899C3.99617 11.93 3.9961 12.0702 3.99975 12.2104ZM11.9997 15.0002C10.3428 15.0002 8.99969 13.657 8.99969 12.0002C8.99969 10.3433 10.3428 9.00018 11.9997 9.00018C13.6565 9.00018 14.9997 10.3433 14.9997 12.0002C14.9997 13.657 13.6565 15.0002 11.9997 15.0002ZM11.9997 13.0002C12.552 13.0002 12.9997 12.5525 12.9997 12.0002C12.9997 11.4479 12.552 11.0002 11.9997 11.0002C11.4474 11.0002 10.9997 11.4479 10.9997 12.0002C10.9997 12.5525 11.4474 13.0002 11.9997 13.0002Z" />
</svg>';
}

public function logout(){
$classname = $this->classname;
$title = $this->title;

return '<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 24 24" class="'.$classname.'">
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
    <g id="log-out">
      <g id="log-out-2" data-name="log-out">
        <rect class="cls-1" width="24" height="24" transform="translate(24 0) rotate(90)" />
        <path class="cls-2" d="M7,6A1,1,0,0,0,7,4H5A1,1,0,0,0,4,5V19a1,1,0,0,0,1,1H7a1,1,0,0,0,0-2H6V6Z" />
        <path class="cls-2"
          d="M20.82,11.42,18,7.42a1,1,0,0,0-1.39-.24,1,1,0,0,0-.24,1.4L18.09,11,18,11H10a1,1,0,0,0,0,2h8l-1.8,2.4a1,1,0,0,0,.2,1.4,1,1,0,0,0,.6.2,1,1,0,0,0,.8-.4l3-4A1,1,0,0,0,20.82,11.42Z" />
      </g>
    </g>
  </g>
</svg>';
}

public function list(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
  <title>'.$title.'</title>
  <path
    d="M5 8V20H19V8H5ZM5 6H19V4H5V6ZM20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM7 10H11V14H7V10ZM7 16H17V18H7V16ZM13 11H17V13H13V11Z" />
</svg>';
}

public function people(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
  <title>'.$title.'</title>
  <path
    d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z" />
</svg>';
}

public function poll_chart(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
  <title>'.$title.'</title>
  <path d="M2 12H4V21H2V12ZM5 14H7V21H5V14ZM16 8H18V21H16V8ZM19 10H21V21H19V10ZM9 2H11V21H9V2ZM12 4H14V21H12V4Z" />
</svg>';
}
public function cloud(){
$classname = $this->classname;
$title = $this->title;

return '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="'.$classname.'">
  <title>'.$title.'</title>
  <path
    d="M12 2C15.866 2 19 5.13401 19 9C19 9.11351 18.9973 9.22639 18.992 9.33857C21.3265 10.16 23 12.3846 23 15C23 18.3137 20.3137 21 17 21H7C3.68629 21 1 18.3137 1 15C1 12.3846 2.67346 10.16 5.00804 9.33857C5.0027 9.22639 5 9.11351 5 9C5 5.13401 8.13401 2 12 2ZM12 4C9.23858 4 7 6.23858 7 9C7 9.08147 7.00193 9.16263 7.00578 9.24344L7.07662 10.7309L5.67183 11.2252C4.0844 11.7837 3 13.2889 3 15C3 17.2091 4.79086 19 7 19H17C19.2091 19 21 17.2091 21 15C21 12.79 19.21 11 17 11C15.233 11 13.7337 12.1457 13.2042 13.7347L11.3064 13.1021C12.1005 10.7185 14.35 9 17 9C17 6.23858 14.7614 4 12 4Z" />
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