<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de real > dólar</title>
</head>
<body>
<div>
    <?php 
    $valor = $_GET["valor"];
    $dolar = 5.20;
    $conv = ($valor / $dolar);

    echo "O valor em dolar é: UU$ $conv";


    
    ?>
     <br>
    <a href="questao1.html"><button>Voltar</button></a>

</div>

    
</body>
</html>