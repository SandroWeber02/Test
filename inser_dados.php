<?php

$servidor = "localhost";
$usuario = "Sandro";
$senha = "123";
$banco = "atv";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `usuarios` (`id`,`nome`, `sobrenome`, `email`)
            VALUES (1, 'Sandro', 'Weber','sandroweber@gmail.com'),
                   (2, 'Eduardo', 'Reis','edureis@gmail.com');

";



        $conn->exec($sql);
        echo "Comando Executado Com Sucesso!!";

} catch (PDOException $e) {
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}




?>