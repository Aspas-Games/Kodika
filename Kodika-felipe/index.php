<?php
if (logado) {
  $get = isset($_GET['page'])? $_GET['page']:'';

  include 'assets/includes/header.php';
  include 'assets/includes/nav.php';
  include 'assets/includes/val....'

  Session_start();

  switch ($get) {
        case 'gamereg':
            include 'pages/game_registration.php';
            break;
        // case '':
        //     include 'pages/.php';
        //     break;
        // case '':
        //     include 'pages/.php';
        //     break;
        default:
            include 'pages/home/home.php';
    }

  include 'assets/includes/footer.php';
} else {
header('Location: pages/login.php');
}
