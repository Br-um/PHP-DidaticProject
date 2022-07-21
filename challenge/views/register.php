<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastro</title>
     <link rel="stylesheet" href="../public/style.css">
</head>

<body>

     <header>
          <h1>Cadastro</h1>
     </header>


     <form action="../controller/register-controller.php" method="POST">

          <fieldset>
               <legend>Cadastro</legend>
               <input type="text" name="nome" placeholder="nome" required>
               <input type="email" name="email" placeholder="email" required>
               <input type="password" name="senha" placeholder="Senha" required>
               <input type="submit" value="Criar conta">
          </fieldset>




     </form>

     <a href="../index.php">Entrar</a>
</body>

</html>