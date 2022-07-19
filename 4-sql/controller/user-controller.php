<?php
     include('../models/conn.php');
     include('../models/user.php');
     $usuario = new Usuario();

     $usuario->setName($_POST['name']);
     $usuario->setAge($_POST['age']);
     $usuario->setGender($_POST['gender']);

     if($usuario->validation()):
          $query = "INSERT INTO usuario (nome, idade, genero) VALUES ('{$usuario->getName()}', '{$usuario->getAge()}', '{$usuario->getGender()}')";
          mysqli_query($conn, $query);
          header('Location: ../index.php');
     else:
          echo "Erro ao inserir valores no banco";
     endif;
?>