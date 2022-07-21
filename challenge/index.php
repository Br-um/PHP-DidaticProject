<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>

     <link rel="stylesheet" href="./public/style.css">
</head>

<body>

     <p>

          <?php

          if (isset($_GET['msg'])) {
               echo $_GET['msg'];
          }

          ?>

     </p>


     <header>
          <h1>Faça Login</h1>
     </header>

     <main>

          <form action="./controller/login-controller.php" method="POST">

               <fieldset>
                    <legend>Login</legend>
                    <input type="email" name="email" placeholder="email" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <input type="submit" value="Entrar">
               </fieldset>


          </form>

          <div>
               <a href="./views/register.php">Cadastrar</a>
          </div>


     </main>

</body>

</html>