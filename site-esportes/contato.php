<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockgol - Contato</title>
    <?php
            include("./src/font-origin.php");
            
        ?>
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
        <form action="contato2.php" method="post" class="conteudo-formulario">
            <h2 class="tituloFormulario">Esteja sempre informado!</h2>
            <div class="input">
                <label class="form-label" for="nome">Nome: </label>
                <input class="form-input" type="text" name="nome" id="nome" placeholder="Insira aqui seu nome">
            </div>
            <div class="input">
                <label class="form-label" for="email">Email: </label>
                <input class="form-input" type="text" name="email" id="email" placeholder="Insira aqui seu email"><br>
                <input class="form-submit" type="submit" value="Enviar">
            </div>
            
            
        </form>
    </section>

    <footer class="rodape">
    <?php
            include("./src/footer.php");
        ?>
    </footer>
</body>
</html>