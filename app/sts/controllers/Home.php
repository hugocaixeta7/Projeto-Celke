<?php
namespace App\sts\Controllers;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class Home
{ 
    private array $dados;
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->dados);
        $carregarView->renderizar();
    }
}