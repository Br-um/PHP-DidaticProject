<?php

     include '../model/conn.php';
     include '../model/user-model.php';

     $email = $_POST['email'];
     $senha = $_POST['senha'];

     $sql = "SELECT * FROM cadastro WHERE email = '{$email}' AND senha='{$senha}'";
     $resultado = mysqli_query($conn, $sql);
     if(mysqli_num_rows($resultado) == 1):
          $row = mysqli_fetch_assoc($resultado);

          $msg = "Login efetuado com sucesso.<br> Bem vindo {$row['nome']}";
          header('Location: ../index.php?msg='.$msg);
     else:
          $erro = "Erro no login.";
          header('Location: ../index.php?msg='.$erro);
     endif;
?>