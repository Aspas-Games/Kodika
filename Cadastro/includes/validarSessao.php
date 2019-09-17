<?php

session_start();
if (isset($_SESSION["login"]) && isset($_SESSION["senha"]) && $_SESSION["login"] == "admin" && $_SESSION["senha"] == 123) {
}
 ?>
