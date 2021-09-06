<?php
include("DBconfig.php");
$response = $connection->query("select ZON_ID, ZON_NOME, ZON_HRFUNCIONAMENTO FROM tb_zonas");
?>