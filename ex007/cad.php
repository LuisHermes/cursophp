<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
        <main>
            <?php 
                // var_dump($_GET);
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                echo "<p> É um prazer te conhecer , <strong>$nome $sobrenome</strong> ! Este é meu Site. ";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
        </main>
    </header>
    
</body>
</html>