<?php

class profileList {
protected $icon, $title, $link;
public function __construct($icon, $title, $link){
    $this->icon = $icon;
    $this->title = $title;
    $this->link = $link;
  }

public function list(){
  $icon = $this->icon;
  $title = $this->title;
  $link = $this->link;

  return "<a href='profile/$link' class='profile-item' >$icon
          <span class='title'>$title</span> 
          </a>";
}
}