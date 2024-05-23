<?php
session_start();
require_once 'controllers/controllers.php';
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Asociación de Recicladores Los Motilones ESP | '.$PageName.'</title>';
include 'includes/head.php';
include 'app/head.php';
echo '</head>
<body>
<header>';
 include 'includes/header.php';
echo '</header>
<main>';
 include 'includes/menu.php';
include $PageLocation;
echo '</main>
<footer>';
include 'includes/footer.php';
echo '</footer>
</body>
</html>';
?>