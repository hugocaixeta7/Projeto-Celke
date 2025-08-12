<?php

namespace App\sts\Controllers;

if(!defined('URL')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class Home
{
    public function index() {
        echo "Página Home!<br>";
    }
}