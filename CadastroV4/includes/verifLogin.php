<?php
session_start();
if(!$_SESSION['nick']) {
  header('Location:../index.php');
  exit();
}
