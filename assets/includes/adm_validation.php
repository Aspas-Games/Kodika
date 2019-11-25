<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: index.php');
} else {
  if ($_SESSION['login'] != 'adm') {
    header('Location: index.php');
  }
}
