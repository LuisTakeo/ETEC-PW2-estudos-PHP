<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dados</title>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $peso = $_POST["peso"];
        

        $isMaiorDeIdade = $idade >= 18;
        $isAcimaDoPeso = $peso > 100;

    ?>
</head>
<body 
    <?php echo $isAcimaDoPeso ? "class='vermelho'" : "class=''" ?>
>
    <p class="main-form">
        <?php
            echo "$nome tem $idade anos e pesa $peso quilos. <br>";
            echo $isMaiorDeIdade ? "$nome é maior de idade" : "$nome é menor de idade";
            echo $isAcimaDoPeso ? ", está acima do peso e deve fazer regime." : ".";

        ?>
    </p>  
    
    
</body>
</html>