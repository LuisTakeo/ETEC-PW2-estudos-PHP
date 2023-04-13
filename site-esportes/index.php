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
    
    <section class="container-conteudo">
        <main class="conteudo-principal">
            <div class="principalMateria">
                <h2 class="tituloMateria">Rockgol volta com tudo no TikTok</h2>
                <img class="imagemMateria" src="./src/img/Rockgol.jpg" alt="" srcset="">
                <p class="textomateria"> Lipsum Ipsum.</p>
            </div>
            <div class="principalMateria">
                <h2 class="tituloMateria">Rockgol volta com tudo no TikTok</h2>
                <img class="imagemMateria" src="" alt="" srcset="">
                <p class="textomateria"> Lipsum Ipsum </p>
            </div>
        </main>
    </section>

    <footer class="rodape">
    <?php
            include("./src/footer.php");
        ?>
    </footer>

</body>
</html>