<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ex-Veículo</title>
</head>
<body>
     <form action="./model/calculo.php" method="POST">
          <fieldset style="display: flex; flex-direction: column; width: 200px;">
               <input type="number" name="valor" placeholder="Digite o valor:">
               <input type="number" name="parcelas" placeholder="Digite as parcelas:">
          </fieldset>
          <button type="submit">Enviar</button>
     </form>
</body>
</html>