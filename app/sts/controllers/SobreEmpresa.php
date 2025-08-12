<?php

namespace App\sts\Controllers;
if(!defined('URL')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class SobreEmpresa
{
    public function index() {
        echo "Página Sobre Empresa!<br>";
    }
}