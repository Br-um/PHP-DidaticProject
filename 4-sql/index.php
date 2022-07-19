<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./public/css/css.css">
     <title>sql</title>
</head>
<body>
     <form action="./controller/user-controller.php" method="POST">
          <fieldset>
               <input type="text" name="name" placeholder="nome">
               <input type="number" name="age" placeholder="idade">
               <input type="text" name="gender" placeholder="gênero">
               <input type="submit" value="Cadastrar">
          </fieldset>
     </form>
</body>
</html>