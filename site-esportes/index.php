<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockgol - Pagina inicial</title>
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
    
    <section class="container-conteudo">
        <main class="conteudo-principal">
            <div class="principalMateria">
                <h2 class="tituloMateria">Rockgol volta com tudo no TikTok</h2>
                <img class="imagemMateria" src="./src/img/Rockgol.jpg" alt="" srcset="">
                <p class="textomateria"> A gente te contou aqui sobre as várias iniciativas para comemorar os 25 anos do programa Rockgol, exibido na MTV Brasil entre 1995 e 2012.<br><br>

Apresentada pelos humoristas Paulo Bonfá e Marco Bianchi, a atração ganhou uma exposição no Museu do Futebol, um podcast no Spotify e agora também será celebrada pelo TikTok.<br><br>

A rede social transmitirá no dia 4 de fevereiro, a partir das 16h no perfil @rockgol25, uma super live com cinco partidas consecutivas em formato de jogo-exibição.<br><br>

Os times serão formados por bandas e artistas que disputaram o antigo campeonato, personalidades diversas que visitaram o estúdio do programa, novos talentos musicais, influenciadores e criadores de conteúdo.</p>
            </div>
            <div class="principalMateria">
                <h2 class="tituloMateria">Exposição em São Paulo celebra 25 anos do Rockgol</h2>
                <img class="imagemMateria" src="./src/img/rockgol-mtv-brasil.jpg" alt="" srcset="">
                <p class="textomateria"> A história da música brasileira desde o final dos anos 1990 não pode ser contada sem falar de… futebol? Celebrando suas bodas de prata em 2022, o Rockgol, torneio esportivo organizado pela MTV Brasil e apresentado por Paulo Bonfá e Marco Bianchi, é tema de uma exposição montada para mostrar a dor e a glória de roqueiros tentando não pagar mico nos gramados de Birigui.<br> <br>
                Com mais de 500 metros quadrados ocupados, a mostra contará com vídeos exclusivos, fotos inéditas, narrações históricas, objetos de cena, uniformes oficiais, memorabilia e até cenografia original do lendário programa Rockgol.<br><br>
                
                Entre os episódios lembrados estão a briga entre Di Ferrero e Jimmy London, ex-vocalistas do NX Zero e do Matanza, além das passagens de Jorge Ben Jor, Rivellino e Seu Jorge. O torneio era tão popular durante sua existência, de 1997 a 2010, que gerou um programa semanal de auditório apresentado por Bonfá e Bianchi.
            
            </p>
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