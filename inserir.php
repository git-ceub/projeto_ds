<?php

    include_once("conexao.php");

    $nome = $_REQUEST['nome'];
    $ra = $_REQUEST['ra'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO aluno (nome, ra, email) 
            VALUES (:nome, :ra, :email)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':ra', $ra);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    header("Location: index.php");
?>