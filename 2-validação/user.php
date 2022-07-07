<?php
     $phone = $_POST['phone'];


     if(!isset($phone)):
          echo "existe um numero aqui";
     else:
          echo "Não existe valor nenhum";
     endif;
          
?>