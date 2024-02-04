<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php 
    $nome = "Luis";
    $sobrenome = "Henrique";
    const PAIS = "Italia"; // const em Maiusculo
    const CURSO = "TI"; // Não pode alterar 
    $idade = 43;
    $peso = 118.5;
    $casado = false;

    echo "Muito prazer, $nome $sobrenome Voce mora na " . PAIS;
    ?>
</body>
</html>