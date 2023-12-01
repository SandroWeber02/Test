<?php

$servidor = "localhost";
$usuario = "Victor";
$senha = "123";
$banco = "atv";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE usuarios(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(120) NOT NULL,
        sobrenome VARCHAR(120),
        email VARCHAR(50)
        );        
";
        $conn->exec($sql);
        echo "Comando Executado Com Sucesso!!";

} catch (PDOException $e) {
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}




?>