<?php
     include '../models/conn.php';
     $name = $_POST['name'];

     $sql = "SELECT * FROM usuario WHERE nome = '$name'";
     $resultado = mysqli_query($conn, $sql);
     if(mysqli_num_rows($resultado) > 0):
          $row = mysqli_fetch_assoc($resultado);

          $info = '<br>Id: '. $row['idusuario'] . '<br>Nome: ' .$row['nome']. '<br>Idade: '. $row['idade'] .' <br>Genero: '.$row['genero'];
          header('Location: ../index.php?info='.$info);
     else:
          header('Location: ../index.php');
     endif;
?>