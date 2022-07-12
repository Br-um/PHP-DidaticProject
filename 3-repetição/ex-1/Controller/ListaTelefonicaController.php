<<?php

class ListaTelefonicaController {

    private $campos = ['quantidade-contatos'];

    public function main() {
        $this->verificarCampos();
        session_start();

        $_SESSION['quantidade-contatos'] = $_POST['quantidade-contatos'];
        $this->RedirecionarAoView();
    }

    public function RedirecionarAoView() {
        header("Location: ../View/ListaTelefonicaView.php");
    }

    public function verificarCampos() {
        foreach ($this->campos as $campo) {
            if (empty($_POST[$campo])) {
                $this->RedirecionarAoView();
            }
        }
    }
}

$controller = new ListaTelefonicaController();
$controller->main();