<?php 
namespace App\sts\Models;
if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}
class StsHome
{
    private object $connection;
    public function index() {
        $connection = new \App\sts\Models\helper\Stsconn();
        $this->connection = $connection->connect();
        echo "Listas dados da página home";
    }
}