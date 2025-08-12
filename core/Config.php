<?php 
namespace Core;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada");
}
class Config 
{
    protected function config(){
        define('URL', 'http://localhost/celke-projeto/Source%20Files/');
        define('URLADM', 'http://localhost/celke-projeto/Source%20Files/adm');

        define('CONTROLLER', 'Home');
        define('METODO', 'INDEX');
            
        // Credenciais de acesso ao Banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'celke');
        define('PORT', 3306);

    }
}