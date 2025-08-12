<?php

namespace App\sts\Controllers;
if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class SobreEmpresa
{
    private array $dados;
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->dados);
        $carregarView->renderizar();
    }
}