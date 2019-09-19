<?php
$get = isset($_GET['page'])? $_GET['page']:'';

include 'assets/includes/header.php';
include 'assets/includes/nav.php';

switch ($get) {
      case 'gamereg':
          include 'pages/adm/list_games.php';
          break;
      case 'games':
          include 'pages/games.php';
          break;
      // case '':
      //     include 'pages/.php';
      //     break;
      default:
          include 'pages/home.php';
  }

include 'assets/includes/footer.php';
