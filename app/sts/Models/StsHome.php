<?php 
namespace App\sts\Models;

class StsHome
{
    private object $connection;
    public function index() {
        $connection = new \App\sts\Models\helper\Stsconn();
        $this->connection = $connection->connect();
        echo "Listas dados da página home";
    }
}