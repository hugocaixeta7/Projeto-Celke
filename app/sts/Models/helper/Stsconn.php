<?php
namespace App\sts\Models\helper;
use PDO;

class Stsconn

{
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbName = DBNAME;
    private int $port = 3306;
    private object $connect;
    
    public function connect()
{
    try{
        $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->dbName}", $this->user, $this->pass);
        return $this->connect;
    } catch(\PDOException $e) {
        die('Erro: Por favor tene novamente. caso o poblema persista, entre em contato com o admistrador ' . EMAILADM);
    }
}
}