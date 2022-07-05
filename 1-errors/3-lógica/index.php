<?php
//      Abaixo temos um array de 5 elementos listando alimentos
    $comidas = array("Maça", "Carne", "Frango", "Arroz", "Feijão");

    echo "Quero exibir o primeiro item do array:  <b>" . $comidas[1]."</b>"; // O programador vai tentar printar o nome maça como numero de array 1 mas mal sabe o que espera...

//      OPAAAA parece que ao invez de 'Maça' recebemos em nossa tela 'Carne', sem mais delongas ja vamos apontar o culpado, quando temos um array o primeiro item sempre será '0'
//      portanto para imprimirmos nossa 'Maça' deveriamos usar $comidas[0].
//      isso aponta de forma clara o que é um erro de lógica, a melhor forma de melhorar a lógica é entender como o sistema funciona e saber trabalhar com ele de forma inteligente.
?>