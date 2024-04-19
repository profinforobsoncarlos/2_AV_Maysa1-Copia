<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<div>
    <?php 
    $nome = $_GET["name"];
    $email =  $_GET["email"];
    $data_nasc = $_GET["data"];
    $ano = date("Y",strtotime($data_nasc));
    $idade = date("Y") - $ano;
    $sexo = $_GET["sexo"];
    $status = $_GET["status"];
    $profissão = $_GET["profissão"];
    
    switch ($sexo) {
        case 1:
            $r = "Feminino";
            break;
        
        case 2:
            $r = "Masculino";
    }
    switch ($status) {
        case 1:
            $st = "Solteiro(a)";
            break;
        case 2:
            $st = "Casado(a)";
            break;
        case 3:
            $st = "Viúvo(a)";
    }
    echo "<h1>Cadastro feito!</h1>";
    echo "<h2>Nome:$nome </h2>";
    echo "<h2>Idade:$idade</h2>";
    echo "<h2>Profissão: $profissão</h2>";
   

    ?>
    <br>
    <a href="questao4.html"><button>Voltar</button></a>

</div>

    
</body>
</html>