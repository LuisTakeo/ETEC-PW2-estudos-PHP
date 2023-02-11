<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero1 = 15;
        $numero2 = 14;
        $nome = 'Takeo';
        $soma_numero = $numero1 + $numero2;
        $idade = 31;
        $peso = 80.7;
        echo "<h1>Seja bem vindo, " . $nome . "</h1>";
        echo "<p>" . $nome . " possui " . $idade . " anos e pesa " . $peso . "kgs. </p>";
        echo "<h2>" . $soma_numero . "</h2>";
    ?>
</body>
</html>