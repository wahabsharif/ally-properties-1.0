<?php
session_start();
if(!isset($_GET['logout'])){
  session_destroy();
  header("location:https://allyproperties.pk/admin-panel/auth/login.php");  
}
?>