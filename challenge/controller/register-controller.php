<?php


     include '../model/conn.php';
     include '../model/user-model.php';

     $user = new User();

     $user->setEmail($_POST['email']);
     $user->setSenha($_POST['senha']);
     $user->setNome($_POST['nome']);

     if($user->validate()):
          $query = "INSERT INTO cadastro (nome, email, senha) VALUES ('{$user->getNome()}', '{$user->getEmail()}', '{$user->getSenha()}')";
          mysqli_query($conn, $query);

          $msg = 'Cadastro Efetuado com Sucesso';

          header('Location: ../index.php?msg='.$msg);
     else:
          echo "Erro ao inserir valores no banco";
     endif;
