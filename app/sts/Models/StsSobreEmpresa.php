<?php
namespace App\sts\Models;
if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}
use PDO;

class StsSobreEmpresa
{
    // Atributos
    private object $connection;

    // Métodos
    public function index() {
    $connection = new \App\sts\Models\helper\Stsconn();
    $this->connection = $connection->connect();

    $limit = 5;
    $query_sobres_emps = "SELECT id, title, description, image FROM sts_sobres_empresas WHERE sts_situation_id = :sts_situation_id LIMIT {$limit}";

    $result_sobres_emps = $this->connection->prepare($query_sobres_emps);
    $result_sobres_emps->bindValue(':sts_situation_id', 1, PDO::PARAM_INT);
    $result_sobres_emps->execute();

    $result = $result_sobres_emps->fetchAll();
    var_dump($result);
}
}
