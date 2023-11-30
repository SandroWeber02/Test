<?php

$servidor = "localhost";
$usuario = "Sandro";
$senha = "123";
$banco = "atv";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}




?>