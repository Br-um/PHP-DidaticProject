<?php

     $quantidade_contatos = $_POST['quantidade'];

     $cont = 1;

     while ($cont <= $quantidade_contatos) {
          echo "$cont <input placeholder='Nome'> <input placeholder='Telefone'><br>";
          $cont++;
     }