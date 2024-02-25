<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 003</title>
</head>
<body>
    <main>
        <h1>Resultado de cotação , Exercicio</h1>
            <?php 
                $cotacao = 5.36;
                $real = 1000;

                $euro = $real / $cotacao;

                echo " Seu dinheiro equivale a : $euro";

            ?>
        
    </main>
    
</body>
</html>