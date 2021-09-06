<?php
include("DBconfig.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $response = $connection->query("select ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO FROM tb_zonas WHERE ZON_ID = $id");
}else{
    $response = $connection->query("select ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO FROM tb_zonas");
}


?>