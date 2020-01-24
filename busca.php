<?php

try {
    $pdo = new PDO('mysql:dbname=projeto_autocomplete;host=localhost', "root", "");
} catch (PDOException $ex) {
    
}

if (!empty($_POST['texto'])) {
    $texto = $_POST['texto'];

    $sql = "SELECT * FROM pessoas WHERE nome LIKE :texto";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":texto", '%' . $texto . '%');
    $sql->execute();

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $pessoa) {
            echo $pessoa['nome'] . "<br/>";
        }
    }
}
    