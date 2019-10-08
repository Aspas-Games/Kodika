<?php
$get = isset($_GET['page'])? $_GET['page']:'';

include 'assets/includes/header.php';
include 'assets/includes/nav.php';

switch ($get) {
      case 'gamelist':
          include 'pages/adm/list_games.php';
          break;
      case 'genrelist':
          include 'pages/adm/list_genre.php';
          break;
      case 'genrereg':
          include 'pages/adm/genre_registration.php';
          break;
      case 'gamereg':
          include 'pages/adm/game_registration.php';
          break;
      // case '':
      //     include 'pages/.php';
      //     break;
      default:
          include 'pages/home.php';
  }

include 'assets/includes/footer.php';
