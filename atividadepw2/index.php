<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulario</title>
</head>
<body>

    <form class="main-form" action="exibirDados.php" method="post">
        <Label for="nome">Nome: </Label>
        <input type="text" id="nome" name="nome" placeholder="Insira o seu nome"> <br>
        <Label for="idade">Idade: </Label>
        <input type="text" id="idade" name="idade" placeholder="Insira a sua idade"><br> 
        <Label for="peso">Peso: </Label>
        <input type="text" id="peso" name="peso" placeholder="Insira o seu peso"> <br>
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>