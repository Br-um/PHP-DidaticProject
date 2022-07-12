<?php

    session_start();

    if (!empty($_SESSION['sequencia'])) {
        require '../Model/Sequencia.php';
        $sequencia = unserialize($_SESSION['sequencia']);
    }       
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia</title>
</head>
<body>

    <form action="../Controller/SequenciaController.php" method="post">

        <input type="number" name="maximo" placeholder="maximo">
        <input type="submit" value="Gerar Sequencia">

    </form>

    <?php


    if (!empty($_SESSION['sequencia'])) {
        echo $sequencia->getSequencia();
    }
    
    ?>
    
</body>
</html>