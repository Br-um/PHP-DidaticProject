<?php

    class Parcelamento {
        private $valorTotal;
        private $quantidadeParcelas;
        
        public function __construct($valorTotal, $quantidadeParcelas)
        {
            $this->valorTotal = (int) $valorTotal;
            $this->quantidadeParcelas = (int) $quantidadeParcelas;

        }

        public function getValorPorParcela() {
            return $this->valorTotal / $this->quantidadeParcelas;
        }

        public function getQuantidadeParcelas()
        {
                return $this->quantidadeParcelas;
        }
        
        public function setQuantidadeParcelas($quantidadeParcelas)
        {
                $this->quantidadeParcelas = $quantidadeParcelas;

                return $this;
        }

        public function getValorTotal()
        {
                return $this->valorTotal;
        }

        public function setValorTotal($valorTotal)
        {
                $this->valorTotal = $valorTotal;

                return $this;
        }
    }