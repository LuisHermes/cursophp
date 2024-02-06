<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 R</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n -1;
                $s = $n +1;
                echo "O numero escolhido foi $n";
                echo "<br> O seu antecessor é $a";
                echo "<br> O seu sucessor é $s";

            ?>
        </p>
       
        <button><a href="javascript:history.go(-1)">Voltar</a></button>


    </main>
</body>
</html>