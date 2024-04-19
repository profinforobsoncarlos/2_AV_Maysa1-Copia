<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
<div>
    <?php 
    $nome = $_GET["nome"];
    $ano_nasc = $_GET["ano"];
    $ano = date("Y",strtotime($ano_nasc));
    $idade = date("Y") - $ano;
    if ($idade < 11) {
        $v = "Criança.";
    }
    elseif ($idade >=12 && $idade <= 14 ) {
            $v = "Adolescente";
        }
        elseif ($idade >= 15 && $idade <= 18) {
            $v = "Jovem";
        }
    elseif ($idade <= 64) {
        $v = "Adulto";
    } 
    else {
        $v = "Idoso";
    }
           
        
    
    echo "Sua idade é: $idade, você é $v:";


    
    

    
    ?>
     <br>
    <a href="questao2.html"><button>Voltar</button></a>

</div>

    
</body>
</html>