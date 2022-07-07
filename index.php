

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

     <form action="" method="post">
          <input type="text" name="telefone">
          <input type="submit" value="Enviar">
     </form>
     
</body>
</html>

<?php

     $telefone = isset($_POST['telefone']);

     if ($telefone) {
          echo $telefone;
     } else {
          echo "nao ta no post";
     }
?>