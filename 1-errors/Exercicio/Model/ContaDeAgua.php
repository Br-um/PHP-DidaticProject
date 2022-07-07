<?php

     class ContaDeAgua {

          private $consumo;

          public function obterTarifa() {

               if ($this->consumo <= 10) {
                    return 0.69;
               } elseif ($this->consumo <= 15) {
                    return 1.17;
               } elseif ($this->consumo <= 25) {
                    return 1.48;
               } else {
                    return 1.6;
               }

          }

          public function calcularValorAgua() {

               return $this->obterTarifa() * $this->consumo;

          }

          public function calcularTaxaEsgoto() {
               return $this->calcularValorAgua() * (2.5/100);
          }

          public function calcularTotal() {
               return $this->calcularValorAgua() + $this->calcularTaxaEsgoto() + 5;
          }

          public function getConsumo()
          {
                    return $this->consumo;
          }

          public function setConsumo($consumo)
          {
                    $this->consumo = $consumo;

                    return $this;
          }
     }

    

