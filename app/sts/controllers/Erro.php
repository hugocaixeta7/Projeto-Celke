<?php

namespace App\sts\Controllers;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class Erro
{
    private array $dados;
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/erro/erro", $this->dados);
        $carregarView->renderizar();
    }
}