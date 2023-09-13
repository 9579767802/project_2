<?php
$userprofile = $_SESSION['user_name'];
if(empty($userprofile)){
  header ('location: login.php');
}
?>