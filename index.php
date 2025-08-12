<?php 
require './core/Config.php';
require './vendor/autoload.php';

use Core\ConfigController as Home;
$url = new Home();
$url->carregar();


?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Celke</title>
</head>
<body>
    
</body>
</html>