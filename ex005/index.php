<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
</head>

<body>
<form  action="index.php" method="get">
  Numero 1: <input type="text" name="numero"><br>
  Numero 2: <input type="text" name="numero2"><br>
  <input type="submit">
</form>
 
 <?php 
  // Pega o valor do formulário
  $numero = $_GET['numero'];
  $numero2 = $_GET['numero2'];
  
  // Imprimindo o número fornecido
  echo "Numero digitado: $numero <br />";
  echo "Numero digitado: $numero2 <br />";
   
  echo "Valor total : ", $numero + $numero2; //Dobra e printa
  
 ?>


 </body>
</html>
</body>
</html>