<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JORNAL JORNAL</title>
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <header class="cabecalho">
        <?php
            include("./src/header.php");
            include("./src/navbar.php");
        ?>
    </header>
    <section class="container-formulario">
        <div class="conteudo-formulario">
            <?php 
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                

                echo "<p> Obrigado $nome por assinar nossa letternews em seu email $email </p>";
            
            ?>
            
        </div>
    </section>

    <footer class="rodape">
    <?php
            include("./src/footer.php");
        ?>
    </footer>
</body>
</html>