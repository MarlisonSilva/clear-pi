<?php
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(app_path()."/../");
$dotenv->load();


$address = $_ENV["DB_HOST"]; 
$user = $_ENV["DB_USERNAME"];
$pass = $_ENV["DB_PASSWORD"];
$db = $_ENV["DB_DATABASE"];
$port = $_ENV["DB_PORT"];


$conexao = new mysqli($address, $user, $pass, $db, $port);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
    exit();
}
date_default_timezone_set('America/Fortaleza');
mysqli_set_charset($conexao, "utf8");
?>