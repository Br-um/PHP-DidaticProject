<?php

    session_start();

    if (!empty($_SESSION['parcelamento'])) {
        require '../Model/Parcelamento.php';
        $parcelamento = unserialize($_SESSION['parcelamento']);
        $valorPorParcela = $parcelamento->getValorPorParcela();
        $quantidadeDeParcelas = $parcelamento->getQuantidadeParcelas();
    }       
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelas</title>
</head>
<body>

    <form action="../Controller/ParcelaController.php" method="post">

        <input type="number" name="valor-total" placeholder="Valor Total">
        <input type="number" name="quantidade-parcelas" placeholder="Quantidade de Parcelas">
        <input type="submit" value="Calcular Parcelas">

    </form>

    <?php


    if (!empty($_SESSION['parcelamento'])) {
        for ($i = 1; $i <= $quantidadeDeParcelas; $i++) {
            echo "<p> {$i} - {$valorPorParcela} </p>";
        }
    }
    
    ?>
    
</body>
</html>