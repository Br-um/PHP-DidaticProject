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
               <legend>Registro:</legend>
               <input type="text" name="name" placeholder="nome">
               <input type="number" name="age" placeholder="idade">
               <select name="gender">
                    <option value="m">Masculino</option>
                    <option value="m">Feminino</option>
               </select>
               <input type="submit" value="Cadastrar">
          </fieldset>
     </form>
     <form action="./controller/search-controller.php" method="POST">
          <fieldset>
               <legend>Buscar:</legend>
               <input type="text" name="name" placeholder="nome">
               <input type="submit">
          </fieldset>
          <fieldset>
               <legend>Resultado: </legend>
               <?php
                    if(isset($_GET['info'])):
                         echo $_GET['info'];
                    else:
                         echo "Erro ao buscar";
                    endif;
               ?>
          </fieldset>
     </form>
</body>

</html>