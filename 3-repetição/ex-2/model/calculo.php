<?php
     $valor = $_POST['valor'];
     $parcelas = $_POST['parcelas'];

     $valorParecelas = $valor/$parcelas;
     
     $cont = 1;
     while($cont <= $parcelas){
          echo "Parecela-$cont: $valorParecelas.R$<br>";
          $cont++;
     }
?>