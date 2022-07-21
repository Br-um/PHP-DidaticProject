<?php
     $conn = mysqli_connect("localhost:3307", "root", 'aula', "teste");

     if( !$conn ):
          echo "Erro ao conectar no banco" . mysqli_connect_error();
          die;
     endif;
?>