<?php

    require '../Model/Parcelamento.php';

    class ParcelaController {

        private $campos = ['valor-total', 'quantidade-parcelas'];

        public function main() {
            $this->verificarCampos();
            session_start();

            $parcelamento = new Parcelamento($_POST['valor-total'], $_POST['quantidade-parcelas']);
            $_SESSION['parcelamento'] = serialize($parcelamento);

            $this->RedirecionarAoView();
        }

        public function RedirecionarAoView() {
            header("Location: ../View/ParcelaView.php");
        }

        public function verificarCampos() {
            foreach ($this->campos as $campo) {
                if (empty($_POST[$campo])) {
                    $this->RedirecionarAoView();
                }
            }
        }
    }

    $controller = new ParcelaController();
    $controller->main();