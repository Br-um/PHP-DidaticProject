<?php

    session_start();

    if (!empty($_SESSION['quantidade-contatos'])) {
        $quantidadeContatos = $_SESSION['quantidade-contatos'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Telefonica</title>
</head>
<body>

    <form action="../Controller/ListaTelefonicaController.php" method="post">

        <input type="number" name="quantidade-contatos" placeholder="Quantidade de Contatos">
        <input type="submit" value="Exibir Lista">

    </form>


    <?php


    if (!empty($_SESSION['quantidade-contatos'])) {
        for ($i = 1; $i <= $quantidadeContatos; $i++) {
            echo '<div>
            '. $i .'
            <input type="text" placeholder="Nome">
            <input type="tel" placeholder="Telefone">
        </div>';
        }
    }
    
    ?>
    
</body>
</html>