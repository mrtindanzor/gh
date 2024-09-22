<?php

class profileList {
public function list($icon, $title, $link){
  $newTitle = strtolower(str_replace(' ','', $title));
  return '<a href="./profile.php?section='.$newTitle.'" class="profile-item" >'.$icon.'
        <span class="title">'.$title.'</span></a>';
}

public function account($element, $classname, $icon, $title){
  $newTitle = strtolower(str_replace(' ','', $title));
  
  if($title == 'Logout') return '<a href="./index.php?logout=true" class="'.$classname.'">'.$icon.'<span>'.$title.'</span></a>';
  if($element == 'a') return '<a href="./profile.php?section='.$newTitle.'" class="'.$classname.'">'.$icon.'<span>'.$title.'</span></a>';
  return '<'.$element.'  class="'.$classname.'">'.$icon.'<span>'.$title.'</span></'.$element.'>';
}
}