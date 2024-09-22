<?php
session_start();
$id['state'] = 0;
if(isset($_SESSION['id'])) {
  $id['state'] = 1;
}
echo json_encode($id);