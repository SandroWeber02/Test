<?php
$servidor = "localhost";
$usuario = "Victor";
$senha = "123";
$banco = "atv";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    SELECT nome, sobrenome From usuarios";
    $dado = $conn->query($sql)->fetchAll();
    foreach($dado as $item){
        echo $item['nome'] . "<br>";
    }
    echo "Comando Executado Com Sucesso!!";

} catch (PDOException $e) {
      echo "Erro ao conectar ao banco: " . $e->getMessage();
}

?>

















