<?php
    include_once("conexao.php");

    $sql = "SELECT * FROM aluno";
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>RA</th>
            <th>EMAIL</th>
        </tr>
        <?php while($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nome ?></td>
                <td><?php echo $row->ra ?></td>
                <td><?php echo $row->email ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>