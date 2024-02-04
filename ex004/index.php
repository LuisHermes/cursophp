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
        $Nome = "Luana";
        $salario = 2500.75; // Se quiser usar acento em salario pode usar , mas dai tem que usar em todo lugar.
        const _TX = 850;
        $nomeCompletoCliente = "Camel Case"; // Sempre usar esse metodo , ou outros podem mais nao é recomendado.
        $telefone_contato_fornecedor = "Snake Case";
        $nomecursosuperior = "";


        echo "É verdade que seu nome é $nome";
        
        echo "É verdade que seu nome é $Nome";
        // Pode usar a mesma variavel nome , mudando o "N".
        
        echo "Seu salario é de Euro $salario";

        echo "Resultado = " . _TX; // sempre o ponto para puxar a const.

    ?>
    
</body>
</html>