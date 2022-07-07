<?php

     $inicio = 1;
     $fim = 100;

     for ($contadorNumeros = $inicio; $contadorNumeros < $fim; $contadorNumeros++) {

          for ($contadorDivisoes = 2; $contadorDivisoes < $contadorNumeros; $contadorDivisoes++) {
               if ($contadorNumeros % $contadorDivisoes == 0) {
                    break;
               }

               if ($contadorDivisoes == $contadorNumeros-1) {
                    echo "$contadorNumeros eh primo <br>";
               }
          }
     }