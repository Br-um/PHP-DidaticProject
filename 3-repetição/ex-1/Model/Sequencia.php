<?php

    class Sequencia {
        private $inicio;
        
        public function __construct($inicio)
        {
            $this->inicio = $inicio;

        }

        public function getSequencia() {
            $seq = '';

            for ($i = 1; $i <= $this->inicio; $i++) {
                $seq = $seq . $i . ' ';
            }

            return $seq;
        }

    }
