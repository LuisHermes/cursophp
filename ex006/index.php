<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='index.php' method="get">
  Nota 1: <input type="text" name="num1"><br>
  Nota 2: <input type="text" name="num2"><br>
  Nota 3: <input type="text" name="num3"><br>
  <input type="submit">
 </form>
 
<?php 
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];
  $media = $num1 + $num2 + $num3 /3;

  if ($media <=60){
        echo "Reprovado";
    } elseif ($media <=80){
        echo "Aprovado com Recuperação";
    }else {
        echo "Aprovado";
    }

    echo $media;
?>
    


 </body>
</html>