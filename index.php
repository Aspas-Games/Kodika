<?php
$get = isset($_GET['page'])? $_GET['page']:'';

include 'assets/includes/header.php';
if ($get == '' || $get == 'userreg') {
} else {
  include 'assets/includes/nav.php';
}

switch ($get) {
  case 'home':
    include 'pages/home.php';
    break;
  case 'gamelist':
    include 'pages/adm/list_games.php';
    break;
  case 'genrelist':
    include 'pages/adm/list_genre.php';
    break;
  case 'gamereg':
    include 'pages/adm/game_registration.php';
    break;
  case 'genrereg':
    include 'pages/adm/genre_registration.php';
    break;
  case 'editGame':
    include 'pages/adm/game_edit.php';
    break;
  case 'userreg':
    include 'pages/register.php';
    break;
  default:
    include 'pages/login.php';
}

if ($get == '' || $get == 'userreg') {
} else {
  include 'assets/includes/footer.php';
}
