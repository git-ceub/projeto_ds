<?php

    include_once("conexao.php");

    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $sql = "SELECT * 
            FROM aluno 
            WHERE email = :email AND senha = :senha";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', md5($senha));
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: listar.php");
    } else {
        header("Location: index.php?m=Usuário ou senha inválidos!");
    }

?>