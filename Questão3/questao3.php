<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status-Aluno</title>
</head>
<body>
<div>
    <?php 
    
    
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $nota3 = $_GET["n3"];
    $nota4 = $_GET["n4"];
    $m = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    echo " a média  entre $nota1, $nota2, $nota3 e $nota4 é igual a $m";

    if ($m >= 7) {
        $v = " Aprovado.";
    }
    elseif ($m >=5 && $m <= 6 ) {

            $v = "Recuperação";
        }
    else {
            $v = "Reprovado";
        }
    
    echo " Sua situação é $v ";
   
   
    

    
    ?>
    <br>
    <a href="questao3.html"><button>Voltar</button></a>

</div>

    
</body>
</html>