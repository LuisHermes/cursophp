<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 002</title>
</head>
<body>
    <main>
        <h1>Gerador numeros aleatorios</h1>
        <?php 
            $min = 0;
            $max = 50;
            $resultado = mt_rand($min,$max); // Função paa Gerar numeros Aleatorios

            echo "Gerando numeros aleatorios: " , $resultado;
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
    
</body>
</html>