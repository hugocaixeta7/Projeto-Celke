<?php
namespace Core;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

class ConfigView
{
    private string $nome;
    private array $dados;

    public function __construct($nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;
        echo "Carregar a view: " . $this->nome;
    }

    public function renderizar(){
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/sts/Views/include/cabecalho.php';
            include 'app/' . $this->nome . '.php';
            include 'app/sts/Views/include/rodape.php';
        } else{
            die ("Página não encontrada!");
        }
    }
}