<?php

     include "../Model/ContaDeAgua.php";

     $conta = new ContaDeAgua();
     $conta->setConsumo($_POST['consumo']);
     echo "<strong>Preço Total: {$conta->calcularTotal()}</strong>";