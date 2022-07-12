<?php

    require '../Model/Sequencia.php';

    class SequenciaController {

        private $campos = ['maximo'];

        public function main() {
            $this->verificarCampos();
            session_start();

            $sequencia = new Sequencia($_POST['maximo']);
            $_SESSION['sequencia'] = serialize($sequencia);

            $this->RedirecionarAoView();
        }

        public function RedirecionarAoView() {
            header("Location: ../View/SequenciaView.php");
        }

        public function verificarCampos() {
            foreach ($this->campos as $campo) {
                if (empty($_POST[$campo])) {
                    $this->RedirecionarAoView();
                }
            }
        }
    }

    $controller = new SequenciaController();
    $controller->main();